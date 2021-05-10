<?php get_header(); ?>
        <!-- Header  End-->
        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
                <div class="p-mainVisual p-mainVisual--page">
                    <?php the_post_thumbnail(); ?>
                    <h1><?php the_title(); ?></h1>
                </div>
                <section class="p-single">
                    <?php the_content(); ?>
                </section>
            <?php endwhile; ?>
            <?php else : ?>
                <p>表示する記事がありません</p>
        <?php endif; ?>
    </article>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>