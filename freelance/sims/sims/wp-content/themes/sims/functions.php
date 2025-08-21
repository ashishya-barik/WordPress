<?php

require get_template_directory().'/inc/cpt.php';
require get_template_directory().'/inc/metabox.php';
require get_template_directory().'/inc/custom-login-page.php';
require get_template_directory().'/inc/theme-settings.php';
require get_template_directory().'/inc/dynamic-inner-banner.php';

add_action('after_setup_theme','mythemesetup');
function mythemesetup()
{

add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => 'Header Menu',
            'secondary' => 'Footer Menu'
        )
    );
}
