<!-- 検索結果の各投稿の表示箇所のphpファイル -->
    <article class="p-archive__article">
        <ul>
            <li class="p-archive__article__contents">
                <a href="<?php the_permalink(); ?>">
                    <div class="p-archive__article__contents__wrap">
                        <div class="p-archive__article__contents__image">
                            <?php if(has_post_thumbnail()):
                                echo get_the_post_thumbnail( $post_id, $size, $attr );
                            else: ?>
                                <p><?php echo 'アイキャッチ画像はありません'; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="p-archive__article__contents__description">
                            <?php the_title( '<h3>', '</h3>' ); ?>
                            <dl>
                                <dt>小見出しが入ります</dt>
                                <dd><?php the_excerpt(); ?></dd>
                            </dl>
                            <button class="c-button--archive-content-detail">詳しく見る</button>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </article>
