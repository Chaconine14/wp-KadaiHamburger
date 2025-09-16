<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
    <?php endwhile; endif; ?>
</main>
    <!-- このdiv閉じタグ二つを足しています -->
            </div>
            </div>

<?php get_footer(); ?>
