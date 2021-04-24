    <!--sideMenu (sidebar)-->
    <div class="l-sideMenu">
        <span class="js-close">×</span>
        <h2 class="c-titles c-titles--menuTop">
            Menu
        </h2>
        <?php
        $defaults = array(
            'menu_class'      => 'p-menu__food',
            'container'       => 'div',
            'container_class' => 'p-menu',
            );
        wp_nav_menu( $defaults );
        ?>
    <!-- sideMenu End -->