<footer class="l-footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/footer-layer.png');">
    <!-- <div class="p-footer-link font-mplus-400"> -->

 <?php
wp_nav_menu( array(
    'theme_location'  => 'footer_menu',
    'container'       => 'nav',
    'container_class' => 'p-footer-link font-mplus-400',
    'menu_class'      => 'p-footer-link__text p-footer-link__text__hover',
) );
?>

        <!-- <a href="" class="p-footer-link__text p-footer-link__text__hover">ショップ情報</a>
        <p class="p-footer-link__text">｜</p>
        <a href="" class="p-footer-link__text p-footer-link__text__hover">ヒストリー</a> -->
    <!-- </div> -->
    <small class="p-footer__copy font-mplus-400">Copyright: RaiseTech</small>
</footer>
    <?php wp_footer(); ?>
</body>

</html>



