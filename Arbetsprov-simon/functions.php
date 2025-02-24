<?php

//laddar in stylesheets
function load_css()
{
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', 
        array(), false, 'all' ); 
    wp_enqueue_style('bootstrapcss');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', 
        array(), false, 'all' ); 
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');

//laddar in Javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', 
        'jquery', false, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_js');

//menyer
add_theme_support('menus');

register_nav_menus(

    array(

        'huvudmeny' => 'huvudmeny',
        'footer-meny' => 'footer meny',

    )

);

//ändrar menytexten till en logotyp
function text_till_logo($item_output, $item, $depth, $args) {
    if ($item->title == 'Arbetsprov') {
        $logo_url = get_template_directory_uri() . '/images/logo.png';
        $item_output = '<a href="' . esc_url($item->url) . '"><img src="' . esc_url($logo_url) . '" alt="Arbetsprov"></a>';
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'text_till_logo', 10, 4);

//ändrar facebook och linkedin-text till logotyper
function text_till_facebook($item_output, $item, $depth, $args) {
    if ($item -> title == 'Facebook') {
        $logo_url = get_template_directory_uri() . '/images/facebook.png';
        $item_output = '<li class="somelink"><a href="' . esc_url($item->url) . '"><img src="' . esc_url($logo_url) . '" alt="Facebook"></a>';
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el' , 'text_till_facebook', 10, 4);

function text_till_linkedin($item_output, $item, $depth, $args) {
    if ($item -> title == 'LinkedIn') {
        $logo_url = get_template_directory_uri() . '/images/linkedin.png';
        $item_output = '<li class="somelink"><a href="' . esc_url($item->url) . '"><img src="' . esc_url($logo_url) . '" alt="LinkedIn"></a>';
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el' , 'text_till_linkedin', 10, 4);

