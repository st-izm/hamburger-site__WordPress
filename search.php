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