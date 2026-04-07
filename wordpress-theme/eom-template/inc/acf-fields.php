<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_eom_homepage',
        'title' => 'Главная страница EOM',
        'fields' => [
            ['key' => 'f_partner_btn', 'label' => 'Кнопка Партнерам', 'name' => 'partner_button_text', 'type' => 'text', 'default_value' => 'Партнерам'],
            ['key' => 'f_hero_title', 'label' => 'Hero заголовок', 'name' => 'hero_title', 'type' => 'text', 'default_value' => 'ВАШЕ СОБЫТИЕ – НАША ОТВЕТСТВЕННОСТЬ'],
            ['key' => 'f_hero_subtitle', 'label' => 'Hero подзаголовок', 'name' => 'hero_subtitle', 'type' => 'textarea', 'default_value' => 'Генеральный подрядчик для организации конгрессов, выставок и деловых событий по 44- и 223-ФЗ. Полная ответственность. Безупречная реализация.'],
            ['key' => 'f_hero_video_preview', 'label' => 'Hero видео превью', 'name' => 'hero_video_preview', 'type' => 'image', 'return_format' => 'array'],
            ['key' => 'f_hero_video_url', 'label' => 'Hero видео URL', 'name' => 'hero_video_url', 'type' => 'url'],
            ['key' => 'f_stats', 'label' => 'Статистика', 'name' => 'stats_cards', 'type' => 'repeater', 'min' => 4, 'max' => 4, 'button_label' => 'Добавить карточку', 'sub_fields' => [
                ['key' => 'f_stats_label', 'label' => 'Подпись', 'name' => 'label', 'type' => 'text'],
                ['key' => 'f_stats_value', 'label' => 'Значение', 'name' => 'value', 'type' => 'text'],
            ]],
            ['key' => 'f_exp_title', 'label' => 'Опыт: заголовок', 'name' => 'confidence_title', 'type' => 'text', 'default_value' => 'НАШ ОПЫТ – ВАША УВЕРЕННОСТЬ'],
            ['key' => 'f_exp_text', 'label' => 'Опыт: текст', 'name' => 'confidence_text', 'type' => 'textarea', 'default_value' => 'Вы получаете одного ответственного подрядчика, который решает все задачи.'],
            ['key' => 'f_exp_cards', 'label' => 'Опыт карточки', 'name' => 'confidence_cards', 'type' => 'repeater', 'min' => 3, 'max' => 3, 'sub_fields' => [
                ['key' => 'f_exp_card_title', 'label' => 'Заголовок', 'name' => 'title', 'type' => 'text'],
                ['key' => 'f_exp_card_text', 'label' => 'Текст', 'name' => 'text', 'type' => 'textarea'],
                ['key' => 'f_exp_card_image', 'label' => 'Фон', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
            ]],
            ['key' => 'f_workflow_title', 'label' => 'Модель: заголовок', 'name' => 'workflow_title', 'type' => 'text', 'default_value' => 'НАША МОДЕЛЬ РАБОТЫ: ПРОЗРАЧНОСТЬ И КОНТРОЛЬ ДЛЯ ВАС'],
            ['key' => 'f_workflow_text', 'label' => 'Модель: текст', 'name' => 'workflow_text', 'type' => 'textarea', 'default_value' => 'Как мы обеспечиваем результат и снимаем с вас операционные риски.'],
            ['key' => 'f_workflow_steps', 'label' => 'workflow_steps', 'name' => 'workflow_steps', 'type' => 'repeater', 'sub_fields' => [
                ['key' => 'f_step_title', 'label' => 'step_title', 'name' => 'step_title', 'type' => 'text'],
                ['key' => 'f_step_text', 'label' => 'step_text', 'name' => 'step_text', 'type' => 'textarea'],
                ['key' => 'f_step_benefit', 'label' => 'step_benefit', 'name' => 'step_benefit', 'type' => 'textarea'],
            ]],
            ['key' => 'f_tasks_title', 'label' => 'Задачи: заголовок', 'name' => 'tasks_title', 'type' => 'text', 'default_value' => 'С КАКИМИ ЗАДАЧАМИ МЫ РАБОТАЕМ'],
            ['key' => 'f_tasks_text', 'label' => 'Задачи: текст', 'name' => 'tasks_text', 'type' => 'textarea', 'default_value' => 'Мы специализируемся на комплексной организации.'],
            ['key' => 'f_tasks_cards', 'label' => 'Tasks', 'name' => 'tasks_cards', 'type' => 'repeater', 'sub_fields' => [
                ['key' => 'f_task_title', 'label' => 'Заголовок', 'name' => 'title', 'type' => 'text'],
                ['key' => 'f_task_text', 'label' => 'Текст', 'name' => 'text', 'type' => 'textarea'],
                ['key' => 'f_task_image', 'label' => 'Фон', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
            ]],
            ['key' => 'f_banner_text', 'label' => 'Баннер текст', 'name' => 'promo_banner_text', 'type' => 'text', 'default_value' => 'Любая сложность и масштаб. Работаем по всей России, странам ЕАЭС, MENA.'],
            ['key' => 'f_adv_title', 'label' => 'Преимущества заголовок', 'name' => 'advantages_title', 'type' => 'text', 'default_value' => 'ПОЧЕМУ С НАМИ БЕЗОПАСНО И ВЫГОДНО'],
            ['key' => 'f_adv_cards', 'label' => 'Преимущества карточки', 'name' => 'advantages_cards', 'type' => 'repeater', 'sub_fields' => [
                ['key' => 'f_adv_card_title', 'label' => 'Заголовок', 'name' => 'title', 'type' => 'text'],
                ['key' => 'f_adv_card_text', 'label' => 'Текст', 'name' => 'text', 'type' => 'textarea'],
                ['key' => 'f_adv_card_image', 'label' => 'Фон', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
            ]],
            ['key' => 'f_trust_title', 'label' => 'Доверие заголовок', 'name' => 'trust_title', 'type' => 'text', 'default_value' => 'НАМ ДОВЕРЯЮТ'],
            ['key' => 'f_trust_text', 'label' => 'Доверие текст', 'name' => 'trust_text', 'type' => 'textarea', 'default_value' => 'Из года в год успешно работаем с крупнейшими госзаказчиками РФ...'],
            ['key' => 'f_trust_logos', 'label' => 'Логотипы доверия', 'name' => 'trust_logos', 'type' => 'gallery', 'return_format' => 'array'],
            ['key' => 'f_reviews_title', 'label' => 'Отзывы заголовок', 'name' => 'reviews_title', 'type' => 'text', 'default_value' => 'Отзывы и благодарственные письма'],
            ['key' => 'f_reviews', 'label' => 'Отзывы', 'name' => 'reviews_items', 'type' => 'repeater', 'sub_fields' => [
                ['key' => 'f_review_preview', 'label' => 'Превью', 'name' => 'preview', 'type' => 'image', 'return_format' => 'array'],
                ['key' => 'f_review_pdf', 'label' => 'PDF', 'name' => 'pdf', 'type' => 'file', 'return_format' => 'array'],
            ]],
            ['key' => 'f_form_title', 'label' => 'Форма заголовок', 'name' => 'form_title', 'type' => 'text', 'default_value' => 'Готовы обсудить ваше событие?'],
            ['key' => 'f_form_text', 'label' => 'Форма текст', 'name' => 'form_text', 'type' => 'textarea', 'default_value' => 'Оставьте заявку, и наш руководитель проектов свяжется с Вами в течение 2 часов.'],
            ['key' => 'f_cta_title', 'label' => 'CTA заголовок', 'name' => 'contractor_cta_title', 'type' => 'text', 'default_value' => 'Вы event-подрядчик или агентство?'],
            ['key' => 'f_cta_text', 'label' => 'CTA текст', 'name' => 'contractor_cta_text', 'type' => 'textarea', 'default_value' => 'Станьте нашим партнером и участвуйте в государственных проектах.'],
        ],
        'location' => [[['param' => 'page_type', 'operator' => '==', 'value' => 'front_page']]],
    ]);
});
