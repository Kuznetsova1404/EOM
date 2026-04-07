<?php

if (!defined('ABSPATH')) {
    exit;
}

function eom_acf_field(string $name, $default = '')
{
    $value = get_field($name);
    if ($value === null || $value === '' || $value === []) {
        return $default;
    }

    return $value;
}

function eom_section_title(string $field, string $default): string
{
    return esc_html((string) eom_acf_field($field, $default));
}
