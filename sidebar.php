<nav class="p-side-menu is-close">
    <h2 class="p-side-menu__title font-roboto">
        <a class="p-side-menu__li__menu__a" href="#">Menu</a>
    </h2>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'side_menu',
        'menu_class'     => 'p-side-menu__li__wrap font-mplus-700',
        'container'      => false,
    ) );
    ?>

</nav>

