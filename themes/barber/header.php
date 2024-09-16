<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- Header Section Begin -->
    <?php get_template_part('parts/content', 'navbar'); ?>
    <!-- Header End -->





<?php
if (!is_front_page()) :
        $args = $_SERVER['REQUEST_URI'];
        $args = ltrim($args, '/'); 
        $args = rtrim($args, '/'); 
        $args = ucfirst($args);
        get_template_part( 'parts/content', 'breadcrumb' , $args);
        ?>

<?php endif;?>
    
