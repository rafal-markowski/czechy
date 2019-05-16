<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Roboto+Condensed:300,400,700&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/bootstrap-4.3.1.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/main.css">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <nav class="top-nav navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="/" class="logo navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                <span class="logo__text ml-md-2 mb-1">plný měšec</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="top-nav__dropdown collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                    if(is_front_page()) {
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => 'ul',
                            'menu_class' => 'top-nav__menu navbar-nav ml-auto container',
                        ));
                    } else {
                        wp_nav_menu(array(
                            'theme_location' => 'big-header-menu',
                            'container' => 'ul',
                            'menu_class' => 'top-nav__menu navbar-nav ml-auto container'
                        ));
                    }
                ?>
            </div>
        </div>
    </nav>
