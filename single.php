<?php get_header(); ?>
        <!-- Header  End-->
<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div class="p-mainVisual p-mainVisual--single">
                <?php the_post_thumbnail(); ?>
                <h1><?php the_title(); ?></h1>
            </div>
            <section class="p-single">
                <?php the_content(); ?>
            </section>
        <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>

    </article>

    <!--sideMenu (sidebar)-->
    <?php get_sidebar(); ?>
    <!-- sideMenu End -->
</main>
<!-- main End -->

<?php get_footer(); ?>