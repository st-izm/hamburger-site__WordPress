<?php get_header(); ?>
<!-- Header  End-->

    <!-- 検索結果表示とループ処理 -->
    <?php if ( have_posts() ) : ?>
        <div class="p-archive-mainVisual">
            <div class="p-archive-mainVisual__mask">
                <h1 class="c-titles--archiveTop"><?php printf( __( 'Search : %s', 'altitude' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'search', 'archive' ); ?>
        <?php endwhile; ?>
        <?php else : ?>
<a>該当なし</a>  
        <?php endif; ?>
    </article>
<!--sideMenu (sidebar)-->
    <?php get_sidebar(); ?>
<!-- sideMenu End -->
</main>
<?php get_footer(); ?>

<!-- get_template_part();でsearch-archive.phpのテンプレートファイルを参照にするよう指定した。 -->