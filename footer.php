<!-- Footer  Start-->
<footer class="l-footer">
    <div class="l-footer__sitemap">
        <?php
        if ( has_nav_menu('FooterMenu') ){
            $footermenu = array(
                'menu'            => 'footer-menu',
                'container'       => 'ul',
                'theme_location'  => 'footer-menu',
            );
            wp_nav_menu( $footermenu );
            }
        ?>
    </div>
    <small>Copyright: RaiseTech</small>
</footer>
<!-- Footer  End-->
<?php wp_footer(); ?>
</body>
</html>