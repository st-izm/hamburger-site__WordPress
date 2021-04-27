<?php get_header(); ?>
<!-- Header  End-->

<!-- 検索結果の検索ワード表示と上部小見出し -->
    <div class="p-archive-mainVisual">
        <div class="p-archive-mainVisual__mask">
            <h1 class="c-titles--archiveTop"><?php printf( __( 'Search : %s', 'altitude' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </div>
    </div>
<section class="p-archive">
    <dl>
        <dt class="p-archive__top__title">小見出しが入ります</dt>
        <dd class="p-archive__top__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
    </dl>





<?php
// 引数の例
$paged = get_query_var('paged')? get_query_var('paged') : 1;
// クエリを実行する
$the_query = new WP_Query( array(
    'post_type' => 'post',
    'paged' => $paged,
    'post_status' => 'publish',
    'posts_per_page' => 5,
));
?>
<?php if ( $the_query->have_posts() ) : ?>

<!-- 投稿の検索結果表示のループ処理 -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <?php get_template_part( 'search', 'archive' ); ?> <!-- get_template_part();で search-archive.php のテンプレートファイルを参照にするよう指定した。 -->
            <?php wp_link_pages( 'before=<div class="c-pager">&after=</div>' ); ?>
        <?php endwhile; ?>
        <?php wp_pagenavi(); ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <a>検索結果がありません</a>  
    <?php endif; ?>

<p>以上試作コード　以下保存コード</p>

<!-- 投稿の検索結果表示のループ処理 -->
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'search', 'archive' ); ?> <!-- get_template_part();で search-archive.php のテンプレートファイルを参照にするよう指定した。 -->
        <?php endwhile; ?>
        <?php else : ?>
            <a>検索結果がありません</a>  
    <?php endif; ?>
        <div class="c-pager">
            <p class="c-pager__fraction">page 1/10</p>
            <p>＜＜<span class="c-pager__sp">前へ</span></p>
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
            </ul>
            <p>＞＞<span class="c-pager__sp">次へ</span></p>
        </div>
    </article>
</section>
<!--sideMenu (sidebar)-->
    <?php get_sidebar(); ?>
<!-- sideMenu End -->
</main>
<?php get_footer(); ?>