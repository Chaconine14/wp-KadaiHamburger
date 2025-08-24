<?php get_header(); ?> 
            <main class="p-main-visual">

                <!-- sp: 〜767px / tb: 768〜1024px / pc: 1025px〜 -->
                <picture>
                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mainvisual-pc.png">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mainvisual-tb.jpg">
                    <img class="p-main-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/mainvisual-sp@2x.jpg" alt="テーブル上のハンバーガーや野菜たち">                </picture>
                <p class="p-main-visual__text font-mplus-700">ダミーサイト</p>
            </main>


            <article class="p-main-card">

                <div class="p-main-card__takeout" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/takeout_back.png');">
                    <h2 class="p-main-card__title font-mplus-700">Take Out</h2>
                    <div class="p-whitebox__wrap">
                        <div class="p-whitebox">
                            <h3 class="p-main-card__subtitle font-mplus-700">Take OUT</h3>
                            <p class="p-main-card__cardtext font-mplus-400">
                                当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
                            </p>
                        </div>
                        <div class="p-whitebox">
                            <h3 class="p-main-card__subtitle font-mplus-700">Take OUT</h3>
                            <p class="p-main-card__cardtext font-mplus-400">
                                当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
                            </p>
                        </div>
                    </div>

                </div>

                 <div class="p-main-card__eatin" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/eatin_back.png');">
                    <h2 class="p-main-card__title font-mplus-700">Eat In</h2>
                    <div class="p-whitebox__wrap">
                        <div class="p-whitebox">
                            <h3 class="p-main-card__subtitle font-mplus-700">Eat In</h3>
                            <p class="p-main-card__cardtext font-mplus-400">
                                店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            </p>
                        </div>
                        <div class="p-whitebox">
                            <h3 class="p-main-card__subtitle font-mplus-700">Eat In</h3>
                            <p class="p-main-card__cardtext font-mplus-400">
                                店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            </p>

                        </div>
                    </div>
                </div>
            </article>

            <section class="p-main-map" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/map-img.png');">
               <div class="p-main-map__back__white">
                    <div class="p-main-map__back__black">
                        <div class="p-main-map__wrap">
                            <h2 class="p-main-map__title font-mplus-700">見出しが入ります</h2>
                            <p class="p-main-map__text font-mplus-700">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                        </div>
                    </div>
            </section>

        </div>
    </div>

<?php get_footer(); ?>