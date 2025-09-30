<?php
// CSS・JSの読み込み
    function kadaihamburger_script() {

        $locale = get_locale();
        $locale = apply_filters( 'theme_locale', $locale, 'kadaihamburger' );

        if( $locale == 'ja' ) {
            wp_enqueue_style( 'kadaihamburger-mplus', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array() );
            wp_enqueue_style( 'kadaihamburger-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', array() );
        }
        
        wp_enqueue_style( 'kadaihamburger-kadaihamburger', get_theme_file_uri ( '/css/style.css' ), array(), '1.0.0' );
        wp_enqueue_style( 'kadaihamburger-style', get_theme_file_uri ( '/style.css' ), array(), '1.0.0' );

        wp_enqueue_script( 'side-menu_js', get_theme_file_uri ( '/js/side-menu.js' ), array(), '1.0.0', true );
        wp_enqueue_script( 'mouse-over_js', get_theme_file_uri ( '/js/mouse-over.js' ), array(), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'kadaihamburger_script' );


// メニューの登録
    function kadaihamburger_register_menus() {

        register_nav_menus(array(
            'footer_menu' => 'フッターメニュー(footer_menu)',
            'side_menu'   => 'サイドメニュー(side_menu)',
        ));
    }

    add_action( 'init', 'kadaihamburger_register_menus' );


//　アイキャッチ画像の有効化
    add_theme_support('post-thumbnails');


// テーマチェック通過用
function mytheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
