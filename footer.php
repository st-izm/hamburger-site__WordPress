<!-- Footer  Start-->
<footer class="l-footer">
    <div class="l-footer__sitemap">
        <?php
            if ( has_nav_menu('footer-menu') ){
                wp_nav_menu( array(
                    'menu'            => 'footer-menu',
                    'container'       => 'ul',
                    'theme_location'  => 'footer-menu',
                ) );
            }
        ?>
    </div>
    <small>Copyright: RaiseTech</small>
</footer>
<!-- Footer  End-->
<?php wp_footer(); ?>
</body>
</html>