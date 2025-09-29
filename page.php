<?php get_header(); ?> 
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <main class="p-single-visual">
                <picture>
                    <img class="p-single-visual__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/shop-visual_sp.png" alt="お店の外観">
                </picture>
                <p class="p-single-visual__text font-mplus-700">ショップについて</p>
            </main>



            <div class="wp-page">
                <?php the_content(); ?>
            </div> 


        </div>
    </div>

    <?php endwhile; ?>

    <?php else: ?>

        <p>記事が見つかりません</p>

    <?php endif; ?>


<?php get_footer(); ?>