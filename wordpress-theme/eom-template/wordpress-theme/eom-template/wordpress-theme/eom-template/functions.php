<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/acf-fields.php';

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'script', 'style']);

    register_nav_menus([
        'footer_menu' => __('Footer menu', 'eom-template'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $theme = wp_get_theme();
    $version = $theme->get('Version') ?: '1.0.0';

    wp_enqueue_style('eom-main', get_template_directory_uri() . '/assets/css/main.css', [], $version);
    wp_enqueue_script('eom-main', get_template_directory_uri() . '/assets/js/main.js', [], $version, true);

    wp_localize_script('eom-main', 'EOMTheme', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('eom_contact_nonce'),
        'success' => __('Заявка отправлена', 'eom-template'),
        'error'   => __('Ошибка отправки. Попробуйте снова.', 'eom-template'),
    ]);
});

add_action('init', function () {
    register_post_type('projects', [
        'labels' => [
            'name'          => __('Проекты', 'eom-template'),
            'singular_name' => __('Проект', 'eom-template'),
        ],
        'public'             => true,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => ['title', 'thumbnail', 'editor', 'excerpt'],
        'show_in_rest'       => true,
        'has_archive'        => false,
        'rewrite'            => ['slug' => 'projects'],
    ]);

    register_taxonomy('project_year', 'projects', [
        'labels' => [
            'name'          => __('Годы проектов', 'eom-template'),
            'singular_name' => __('Год проекта', 'eom-template'),
        ],
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'hierarchical'      => false,
        'rewrite'           => ['slug' => 'project-year'],
        'show_in_rest'      => true,
    ]);
});

add_action('wp_ajax_eom_submit_form', 'eom_handle_form_submission');
add_action('wp_ajax_nopriv_eom_submit_form', 'eom_handle_form_submission');

function eom_handle_form_submission(): void
{
    check_ajax_referer('eom_contact_nonce', 'nonce');

    $name    = sanitize_text_field((string) ($_POST['name'] ?? ''));
    $contact = sanitize_text_field((string) ($_POST['contact'] ?? ''));

    if ($name === '' || $contact === '') {
        wp_send_json_error(['message' => __('Заполните обязательные поля.', 'eom-template')], 400);
    }

    $subject = __('Новая заявка с главной страницы', 'eom-template');
    $message = sprintf(
        "Имя: %s\nКонтакт: %s\nИсточник: %s",
        $name,
        $contact,
        home_url('/')
    );

    $sent = wp_mail('info@eomer.ru', $subject, $message);

    if (!$sent) {
        wp_send_json_error(['message' => __('Письмо не отправлено.', 'eom-template')], 500);
    }

    wp_send_json_success(['message' => __('Заявка отправлена', 'eom-template')]);
}
