<?php get_header(); ?>
<!-- Header  End-->
<!-- 検索結果の検索ワード表示と上部小見出し -->
        <div class="p-archive-mainVisual">
            <div class="p-archive-mainVisual__mask">
                <?php $category_slug = get_query_var('category_name'); ?> <!-- スラッグの取得はできたが、名前(日本語)の表示方法が分からない -->
                <h1 class="c-titles--archiveTop"><?php printf( __( 'Menu : %s', 'altitude' ), '<span>' . $category_slug . '</span>' ); ?></h1>
            </div>
        </div>
        <section class="p-archive">
            <dl>
                <dt class="p-archive__top__title">小見出しが入ります</dt>
                <dd class="p-archive__top__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
            </dl>
            <!-- ここから投稿のアーカイブ結果の一覧ループ処理 -->
            <?php
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish'
                //posts_per_pageは記述せず、管理画面でコントロール
            ));
            ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <?php get_template_part( 'search', 'archive' ); ?> <!-- get_template_part();で search-archive.php のテンプレートファイルを参照にするよう指定した。 -->
                <?php endwhile; ?>
                <?php else : ?>
                    <a>表示する結果がありません</a>
            <?php endif; ?>
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array()); } ?>
            <?php wp_reset_postdata(); ?>
        </section>
    </article>
<!--sideMenu (sidebar)-->
    <?php get_sidebar(); ?>
<!-- sideMenu End -->
</main>
<!-- Footer  Start-->
<?php get_footer(); ?>