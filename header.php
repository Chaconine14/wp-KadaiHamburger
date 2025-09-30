<!DOCTYPE html>
    <html <?php language_attributes(); ?>>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>
            <?php wp_body_open(); ?>
                <div class="c-container">
                    <?php get_sidebar(); ?>
                        <div class="l-main-area">
                            <header class="l-header">
                                <h1 class="p-title font-roboto">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?>
                                    </a>
                                </h1>
                                <search class="p-search">
                                    <?php get_search_form(); ?>
                                </search>
                                <button class="c-menu-btn__sptb">
                                    <span class="js-menu-text font-roboto">Menu</span>
                                    <span class="js-icon__close c-icon__close"></span> <!-- 擬似要素でバツを作る -->
                                </button>
                            </header>