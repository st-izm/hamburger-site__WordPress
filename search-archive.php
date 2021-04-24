<section class="p-archive">
    <dl>
        <dt class="p-archive__top__title">小見出しが入ります</dt>
        <dd class="p-archive__top__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
    </dl>


<!-- 投稿記事表示のためのループ処理 -->
<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?> //投稿を表示
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <?php $args = array (
                        'before' => '<div class="page-split">',
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        );
                        wp_link_pages( $args );
                    ?>
                </div>
<?php
        endwhile; //else部分を除いたループ処理終了
    else : ?>
        <p>表示する記事がありません</p>
<?php
    endif; ?> <!-- ループを完全に終了 -->

            <article class="p-archive__article">
                <ul>
                    <li class="p-archive__article__contents">
                        <div class="p-archive__article__contents__image">
                            <img src=" image/archivepage/archive_article_contents_image.png " alt="チーズバーガー">
                        </div>
                        <div class="p-archive__article__contents__description">
                            <h3>小見出しが入ります</h3>
                            <dl>
                                <dt>見出しが入ります</dt>
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
                            <h3>見出しが入ります</h3>
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
                            <h3>見出しが入ります</h3>
                            <dl>
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                            </dl>
                            <button class="c-button--archive-content-detail">詳しく見る</button>
                        </div>
                    </li>
                    <li class="p-archive__article__contents">
                        <div class="p-archive__article__contents__image">
                            <img src=" image/archivepage/archive_article_contents_image.png " alt="チーズバーガー">
                        </div>
                        <div class="p-archive__article__contents__description">
                            <h3>小見出しが入ります</h3>
                            <dl>
                                <dt>見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                            </dl>
                            <button class="c-button--archive-content-detail">詳しく見る</button>
                        </div>
                    </li>
                    <li class="p-archive__article__contents">
                        <div class="p-archive__article__contents__image">
                            <img src=" image/archivepage/archive_article_contents_image.png " alt="チーズバーガー">
                        </div>
                        <div class="p-archive__article__contents__description">
                            <h3>小見出しが入ります</h3>
                            <dl>
                                <dt>見出しが入ります</dt>
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
            </div>
        </section>