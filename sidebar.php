    <!--sideMenu (sidebar)-->
    <div class="l-sideMenu">
        <span class="js-close">×</span>
        <h2 class="c-titles c-titles--menuTop">
            Menu
        </h2>
        <?php
            if ( has_nav_menu('side-menu') ){
                $sidemenu = array(
                    'menu_class'      => 'p-menu__food',
                    'container'       => 'div',
                    'container_class' => 'p-menu',
                    'theme_location'  => 'side-menu',
                    );
                wp_nav_menu( $sidemenu );
            }
        ?>
        <?php dynamic_sidebar(); ?> <!--テーマチェック対策用-->
    <!-- sideMenu End -->