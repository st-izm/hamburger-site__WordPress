<?php get_header(); ?>
<!-- Header  End-->
<!-- 検索結果の検索ワード表示と上部小見出し -->
        <div class="p-archive-mainVisual">
            <div class="p-archive-mainVisual__mask">
                <h1 class="c-titles--archiveTop"><?php printf( __( 'Search : %s', 'hamburger' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
        </div>
        <section class="p-archive">
            <dl>
                <dt class="p-archive__top__title">小見出しが入ります</dt>
                <dd class="p-archive__top__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
            </dl>
            <!-- ここから投稿の検索結果一覧のループ処理 -->
            <?php
            //引数
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            // クエリを実行する
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish',
                //posts_per_pageは記述せず、function.phpでコントロール
            ));
            ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'search', 'archive' ); ?> <!-- get_template_part();で search-archive.php のテンプレートファイルを参照にするよう指定 -->
                <?php endwhile; ?>
                <?php else : ?>
                    <a>検索結果がありません</a>
            <?php endif; ?>
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            <?php wp_reset_postdata(); ?>
        </section>
    </article>
<!--sideMenu (sidebar)-->
    <?php get_sidebar(); ?>
<!-- sideMenu End -->
</main>
<?php get_footer(); ?>