<?php


// require get_template_directory() . '/inc/customizer.php';


function  barber_load_scripts() {
    wp_enqueue_style('barber-index-css', get_template_directory_uri() . '/assets/css/index.css', array(), '4.6.0');

    // Register vendor scripts
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), '3.5.0', false); // Load in header
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '1.12.4', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);

    // Other plugin scripts
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true);
    wp_enqueue_script('animated-headline', get_template_directory_uri() . '/assets/js/animated.headline.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), '1.0', true);
    wp_enqueue_script('gijgo', get_template_directory_uri() . '/assets/js/gijgo.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '1.0', true);

    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('hover-direction', get_template_directory_uri() . '/assets/js/hover-direction-snake.min.js', array('jquery'), '1.0', true);

    // Contact scripts
    // wp_enqueue_script('contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-form', get_template_directory_uri() . '/assets/js/jquery.form.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('jquery'), '1.0', true);

    // Main and plugin scripts
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'barber_load_scripts');


// function barber_config()
// {

//     register_nav_menus(
//         array(
//             'wp_devs_main_menu' => esc_html__('Main Menu', 'barber'),
//             'wp_devs_footer_menu' => esc_html__('Footer Menu', 'barber')
//         )
//     );

//     $args = array(
//         'height'    => 225,
//         'width'     => 1920
//     );
//     add_theme_support('custom-header', $args);
//     add_theme_support('post-thumbnails');
//     add_theme_support('custom-logo', array(
//         'width' => 200,
//         'height'    => 110,
//         'flex-height'   => true,
//         'flex-width'    => true
//     ));
//     add_theme_support('automatic-feed-links');
//     add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
//     add_theme_support('title-tag');

//     // add_theme_support( 'align-wide' );
//     // add_theme_support( 'responsive-embeds' );
//     // add_theme_support( 'editor-styles' );
//     // add_editor_style( 'style-editor.css' );
// }
// add_action('after_setup_theme', 'barber_config', 0);


