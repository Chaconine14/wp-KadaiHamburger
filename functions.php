<?php
    add_theme_support( 'menus' );


    function kadaihamburger_script() {

        $locale = get_locale();
        $locale = apply_filters( 'theme_locale', $locale, 'kadaihamburger' );

        if( $locale == 'ja' ) {
            wp_enqueue_style( 'kadaihamburger-mplus', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array() );
            wp_enqueue_style( 'kadaihamburger-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', array() );
        }

        wp_enqueue_style( 'kadaihamburger-kadaihamburger', get_theme_file_uri ( '/css/kadaihamburger.css' ), array(), '1.0.0' );
        wp_enqueue_style( 'kadaihamburger-style', get_theme_file_uri ( '/style.css' ), array(), '1.0.0' );

        wp_enqueue_script( 'mainjs', get_theme_file_uri ( '/js/main.js' ), array(), '1.0.0', true );
        wp_enqueue_script( 'linkjs', get_theme_file_uri ( '/js/link.js' ), array(), '1.0.0', true );
        wp_enqueue_script( 'singlejs', get_theme_file_uri ( '/js/single.js' ), array(), '1.0.0', true );
        }

    add_action( 'wp_enqueue_scripts', 'kadaihamburger_script' );