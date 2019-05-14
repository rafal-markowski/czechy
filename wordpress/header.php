<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Roboto+Condensed:300,400,700&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
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
            <!-- <div class="top-nav__dropdown collapse navbar-collapse" id="navbarSupportedContent"> -->
                <!-- <ul class="top-nav__menu navbar-nav ml-auto">
                    <li class="nav-item mr-lg-3"><a href="jak-to-funguje.html" class="top-nav__link">jak to funguje</a></li>
                    <li class="nav-item mr-lg-3"><a href="o-nas.html" class="top-nav__link">o nás</a></li>
                    <li class="nav-item mr-lg-3"><a href="caste-dotazy.html" class="top-nav__link">časté dotazy</a></li>
                    <li class="nav-item"><a href="kontakt.html" class="top-nav__link">kontakt</a></li>
                </ul> -->
                <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'Primary-menu', 
                        'container_class' => 'top-nav__dropdown collapse navbar-collapse', 
                        'container_id' => 'navbarSupportedContent',
                        'menu' => 'ul',
                        'menu_class' => 'top-nav__menu navbar-nav ml-auto',
                        'menu-item' => 'nav-item mr-lg-3'
                    ) 
                ); ?>
            <!-- </div> -->
        </div>
    </nav>

