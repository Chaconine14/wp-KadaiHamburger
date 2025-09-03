<?php get_header(); ?> 


    <main class="l-archive">
        <div class="p-archive-visual">

            <picture>
                <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/archive-visual-pc.png">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/archive-visual-tb.png">
                <img class="p-archive-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/archive-main-visual-sp.png" alt="ハンバーガーの拡大写真">
            </picture>
            <div class="p-archive-visual__textwrap">
                <h2 class="p-archive-visual__title font-roboto">Menu:</h2>
                <p class="p-archive-visual__text font-mplus-700">チーズバーガー</p>
            </div>
            
        </div>


        <section class="p-archive__text-area">
            <h2 class="font-mplus-700 p-archive__text-area__title">小見出しが入ります</h2>
            <p class="font-mplus-400 p-archive__text-area__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
        </section>



        <section class="p-archive__card-area">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>

            <figure class="p-archive__card-area__card">
                <picture class="p-archive__card-area__img-wrap">

                    <?php
                        $thumbnail_id = get_post_thumbnail_id( get_the_ID() );// アイキャッチ画像のIDを取得
                        $alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );// 代替テキスト（alt属性）を取得
                        $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );// アイキャッチ画像のURLを取得（フルサイズで！）
                    ?>

                    <?php if ( $thumbnail_url ) : ?>
                    <img class="p-archive__card-area__img" 
                        src="<?php echo esc_url( $thumbnail_url ); ?>" 
                        alt="<?php echo esc_attr( $alt ); ?>">
                    <?php endif; ?>

                </picture>

                <figcaption class="p-archive__card-area__text-wrap">
                    <h2 class="font-mplus-700 p-archive__card-area__h2"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <div class="p-archive__card-area__btn-area">
                        <a class="font-mplus-700 p-archive__card-area__btn" href="<?php the_permalink(); ?>">詳しく見る</a>
                    </div>
                </figcaption>
            </figure>

            <?php endwhile; ?>
            <?php else: ?>
                <p>記事が見つかりません</p>
            <?php endif; ?>

        </section>

        <!-- 試していますパート2 -->
<?php
echo paginate_links(array(
                        'type' => 'list',
                        'prev_text' => '&lt;',
                        'next_text' => '&gt;',
                    ));
                ?>

        <!-- 試していますパート2 -->



        <nav class="p-page-num font-roboto">
            <p class="p-page-num__now-page">page 1/10</p>

            <div class="p-page-num__nav">
                <button class="c-icon__arrow">
                    <span class="c-icon__arrow__right"></span>
                    <span class="c-icon__arrow__right"></span>
                </button>
                <a class="p-page-num__text font-mplus-400" href="#">前へ</a>
            </div>

            <div class="p-page-num__btn-wrap">
                <a class="p-page-num__btn p-page-num__btn__first" href="#">1</a>
                <a class="p-page-num__btn" href="#">2</a>
                <a class="p-page-num__btn" href="#">3</a>
                <a class="p-page-num__btn" href="#">4</a>
                <a class="p-page-num__btn" href="#">5</a>
                <a class="p-page-num__btn" href="#">6</a>
                <a class="p-page-num__btn" href="#">7</a>
                <a class="p-page-num__btn" href="#">8</a>
                <a class="p-page-num__btn" href="#">9</a>
            </div>

            <div class="p-page-num__nav">
                <a class="p-page-num__text font-mplus-400" href="#">次へ</a>
                <button class="c-icon__arrow">
                    <span class="c-icon__arrow__left"></span>
                    <span class="c-icon__arrow__left"></span>
                </button>
            </div>
        </nav>
    </main>

<?php get_footer(); ?>