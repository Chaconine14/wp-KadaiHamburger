<?php get_header(); ?> 
    <!-- まずは投稿があるかチェック -->
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>


        <main class="p-single-visual">

            <picture>

                <?php
                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );// アイキャッチ画像のIDを取得
                $alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );// 代替テキスト（alt属性）を取得
                $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );// アイキャッチ画像のURLを取得（フルサイズで！）
                ?>

                <?php if ( $thumbnail_url ) : ?>
                    <img class="p-single-visual__img" 
                    src="<?php echo esc_url( $thumbnail_url ); ?>" 
                    alt="<?php echo esc_attr( $alt ); ?>">
                <?php else: ?>
                    <img class="p-archive__card-area__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/noimage.png" alt="no imageという文字">
                <?php endif; ?>

            </picture>

            <!-- 投稿タイトルを表示 -->
            <p class="p-single-visual__text font-mplus-700">h1 <?php the_title();?></p>  

        </main>

        <div class="wp-single">
            <?php the_content(); ?>
        </div>



    </div>
    </div>
    </div>
    </div>


    <?php endwhile; ?>

    <?php else: ?>

        <p>記事が見つかりません</p>

    <?php endif; ?>


            



           

<?php get_footer(); ?>