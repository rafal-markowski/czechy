<?php

    function register_my_menus() {
        register_nav_menus(
            array(
            'Primary-menu' => __( 'Primary Menu' ),
            'Secondary-menu' => __( 'Secondary Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );