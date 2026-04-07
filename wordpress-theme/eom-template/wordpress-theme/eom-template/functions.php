<?php
add_action('wp_enqueue_scripts', function (): void {
    wp_enqueue_style('eom-template-style', get_stylesheet_uri(), [], '1.0.0');
});
