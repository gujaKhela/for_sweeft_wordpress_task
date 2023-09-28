<?php
// Check if ACF is installed
function check_acf_plugin()
{
    if (!class_exists('acf')) {
        add_action('admin_notices', 'acf_missing_notice');
    }
}
add_action('admin_init', 'check_acf_plugin');

function acf_missing_notice()
{
    echo '<div class="error"><p>';
    echo 'Your theme requires the Advanced Custom Fields (ACF) plugin. Please <a href="' . admin_url('plugins.php') . '">install and activate ACF</a> to use this theme.';
    echo '</p></div>';
}

// Custom sidebar
function custom_theme_register_sidebar()
{
    register_sidebar(array(
        'name' => 'Custom Sidebar',
        'id' => 'custom-sidebar',
        'description' => 'This is a custom sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'custom_theme_register_sidebar');

function enqueue_styles()
{
    wp_enqueue_script('jquery');
    // Enqueue Bootstrap's JavaScript
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);

    wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css");
    wp_enqueue_style("my_style", get_theme_file_uri("build/style.css"));
}

add_action("wp_enqueue_scripts", "enqueue_styles");

function book_fitures()
{
    add_theme_support("title-tag");
    add_image_size('for_single_page', 700, 500, true);
    add_theme_support('page-templates');
}
add_action("after_setup_theme", "book_fitures");
