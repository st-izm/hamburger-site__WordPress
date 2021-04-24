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
    <!-- ナビゲーションの関数 -->
        <!-- <li><a href="#">ショップ情報</a></li>
        <li>|</li>
        <li><a href="#">ヒストリー</a></li> -->
    
    <small>Copyright: RaiseTech</small>
</footer>
<!-- Footer  End-->
<?php wp_footer(); ?>
</body>
</html>