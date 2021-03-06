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
            <section <?php post_class('p-single'); ?>>
                <?php the_content(); ?>
                <?php
                $defaults = array(
                    'before'           => '<p>' . 'ページ:',
                    'after'            => '</p>',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'number',
                    'separator'        => ' ',
                    'nextpagelink'     => '次のページへ',
                    'previouspagelink' => '前のページへ',
                    'pagelink'         => '%',
                    'echo'             => 1
                );
                wp_link_pages( $defaults );
                ?>
                <div class="p-single__tagarea">
                    <?php the_tags(); ?>
                </div>
                <div class="p-single__commentarea">
                    <?php comments_template(); ?>
                </div>
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