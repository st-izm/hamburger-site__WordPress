<!-- Footer  Start-->
<footer class="l-footer">
    <div class="l-footer__sitemap">
        <?php
        $defaults = array(
            'menu'            => 'footermenu',
            'container'       => 'ul',
        );
        wp_nav_menu( $defaults );
        ?>
    </div>
    <small>Copyright: RaiseTech</small>
</footer>
<!-- Footer  End-->
<?php wp_footer(); ?>
</body>
</html>