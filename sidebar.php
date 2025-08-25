<nav class="p-side-menu is-close">
    <h2 class="p-side-menu__title font-roboto">
        <a class="p-side-menu__li__menu__a" href="#">Menu</a>
    </h2>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'side_menu',
        'menu_class'     => 'p-side-menu__li__wrap',
        'container'      => false,
    ) );
    ?>
</nav>






<!-- 
<nav class="p-side-menu is-close">
            <h2 class="p-side-menu__title font-roboto">
                <a class="p-side-menu__li__menu__a" href="#">Menu</a>
            </h2>

            <ul class="p-side-menu__li__wrap">
                <li class="p-side-menu__li font-mplus-700">
                    <a class="p-side-menu__li__menu__a" href="#">バーガー</a>

                    <ul class="p-side-menu__li__menu font-mplus-400">
                        <li><a class="p-side-menu__li__menu__a" href="#">ハンバーガー</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">チーズバーガー</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">テリヤキバーガー</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">アボカドバーガー</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">フィッシュバーガー</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">ベーコンバーガー</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">チキンバーガー</a></li>
                    </ul>
                </li>

                <li class="p-side-menu__li font-mplus-700">
                    <a class="p-side-menu__li__menu__a" href="#">サイド</a>
                    <ul class="p-side-menu__li__menu font-mplus-400">
                        <li><a class="p-side-menu__li__menu__a" href="#">ポテト</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">サラダ</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">ナゲット</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">コーン</a></li>
                    </ul>
                </li>

                <li class="p-side-menu__li font-mplus-700">
                    <a class="p-side-menu__li__menu__a" href="#">ドリンク</a>
                    <ul class="p-side-menu__li__menu font-mplus-400">
                        <li><a class="p-side-menu__li__menu__a" href="#"><a class="p-side-menu__li__menu__a"
                                    href="#">コーラ</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">ファンタ</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">オレンジ</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">アップル</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">紅茶（Ice/Hot）</a></li>
                        <li><a class="p-side-menu__li__menu__a" href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
                </li>

            </ul>
        </nav> -->