<?php get_header(); ?>
        <!-- Header  End-->

        <div class="p-archive-mainVisual">
            <div class="p-archive-mainVisual__mask">
                <?php $category_slug = get_query_var('category_name'); ?> <!-- スラッグの取得はできたが、名前(日本語)の表示方法が分からない -->
                <h1 class="c-titles--archiveTop"><?php printf( __( 'カテゴリー : %s', 'altitude' ), '<span>' . $category_slug . '</span>' ); ?></h1>
            </div>
        </div>
        <section class="p-archive">
            <dl>
                <dt class="p-archive__top__title">小見出しが入ります</dt>
                <dd class="p-archive__top__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
            </dl>

<!-- ループ処理試し書き これから編集 -->
            <?php
            $the_query = new WP_Query(
                array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5,
                )
            );
            ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                        <?php get_template_part( 'search', 'archive' ); ?> <!-- get_template_part();で search-archive.php のテンプレートファイルを参照にするよう指定した。 -->
                <?php endwhile; ?>
            <?php endif; ?>
        <?php wp_pagenavi(array('query'=>$the_query)); ?>
        <?php wp_reset_postdata(); ?>

<!-- コンテンツ箇所　後で消す -->
            <!-- <article class="p-archive__article">
                <ul>
                    <li class="p-archive__article__contents">
                        <div class="p-archive__article__contents__image">
                            <img src=" image/archivepage/archive_article_contents_image.png " alt="チーズバーガー">
                        </div>
                        <div class="p-archive__article__contents__description">
                            <h3>チーズバーガー</h3>
                            <dl>
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                            </dl>
                            <button class="c-button--archive-content-detail">詳しく見る</button>
                        </div>
                    </li>
                    <li class="p-archive__article__contents">
                        <div class="p-archive__article__contents__image">
                            <img src=" image/archivepage/archive_article_contents_image.png " alt="ダブルチーズバーガー">
                        </div>
                        <div class="p-archive__article__contents__description">
                            <h3>ダブルチーズバーガー</h3>
                            <dl>
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                            </dl>
                            <button class="c-button--archive-content-detail">詳しく見る</button>
                        </div>
                    </li>
                    <li class="p-archive__article__contents">
                        <div class="p-archive__article__contents__image">
                            <img src=" image/archivepage/archive_article_contents_image.png " alt="スペシャルチーズバーガー">
                        </div>
                        <div class="p-archive__article__contents__description">
                            <h3>スペシャルチーズバーガー</h3>
                            <dl>
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                            </dl>
                            <button class="c-button--archive-content-detail">詳しく見る</button>
                        </div>
                    </li>
                </ul>
            </article>
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
            </div> -->
        </section>
    </article>
    <?php get_sidebar(); ?>
    <!-- sideMenu End -->
</main>
<!-- main End -->

<!-- Footer  Start-->
<?php get_footer(); ?>