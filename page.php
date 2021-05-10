<?php get_header(); ?>
        <!-- Header  End-->

        <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div class="p-mainVisual p-mainVisual--page">
                <?php the_post_thumbnail(); ?>
                <h1><?php the_title(); ?></h1>
            </div>
            <section class="p-single">
                <?php the_content(); ?>
            </section>
        <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>

    </article>



<!--
        <div class="p-mainVisual p-mainVisual--page">
            <img src="image/page/page_black-steel-lamp-post.png" alt="チーズバーガー">
            <h1>ショップについて</h1>
        </div>
        <section class="p-single">
            <h2>見出しh2</h2>
            <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
            <h3>見出しh3</h3>
            <h4>見出しh4</h4>
            <h3>見出しh3</h3>
            <h4>見出しh4</h4>
            <h5>見出しh5</h5>
            <h6>見出しh6</h6>
            <blockquote class="p-single__blockquote" site="#">
                <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                <p>出典元： ○○○○○○○○○○○○</p>
            </blockquote>
            <img class="p-single__image--wide" src="image/singlepage/singlepage_cooked-foods-wide.png" alt="チーズバーガー">
            <div class="p-single__twocolum">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </div>
            <div class="p-single__twocolum">
                <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
            </div>
            <img class="p-single__image--normal" src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
            <div class="p-single__grid">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
                <img src="image/singlepage/singlepage_cooked-foods-1.png" alt="チーズバーガー">
            </div>
            <div class="p-single__list">
                <ul class="p-single__list__noindent">
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                </ul>
                <ul class="p-single__list__indent1">
                    <li>1.リスト2リスト2リスト2</li>
                    <li>2.リスト2リスト2リスト2</li>
                </ul>
                <ul class="p-single__list__noindent">
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                </ul>
            </div>
            <div class="p-single__list">
                <ul class="p-single__list__noindent">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
                <ul class="p-single__list__indent1">
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ul>
                <ul class="p-single__list__noindent">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
            </div>
            <div class="p-single__code">
                <pre>
                    <code>
&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;
                    </code>
                </pre>
            </div>
            <table>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
            </table>
            <button>
                ボタン
            </button>
            <p>boldboldboldboldboldboldbold</p>
        </section>
    </article>
-->
    <!--sideMenu (sidebar)-->

    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>