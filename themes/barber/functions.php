<?php


// require get_template_directory() . '/inc/customizer.php';


function barber_load_scripts()
{
    wp_enqueue_style('barber-index-css', get_template_directory_uri() . '/assets/css/index.css');






    wp_enqueue_script('main-barber-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

//     //   Google Font 
//     wp_enqueue_style('barber-google-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900|Poppins:400,500,600,700&display=swap', array(), null);
//     wp_enqueue_style('barber-googleapiss', 'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

//     //  Css Styles
//     wp_enqueue_style('barber-font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

//     // JavaScript Libraries
//     // wp_enqueue_script('barber-ajax-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-jquery', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-magnific-popup-js', get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-countdown-min-js', get_theme_file_uri('/assets/js/jquery.countdown.min.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-slicknav', get_theme_file_uri('/assets/js/jquery.slicknav.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-owlcarousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('barber-main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);


//     wp_enqueue_script('barber-custom-js', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '1.0', true);
//     wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), null, true);
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


