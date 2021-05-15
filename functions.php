<?php
    //テーマサポート
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );
    
    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), '4.0.3' ); //修正済
        //wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' ); //おかしいが何に修正すべきか分からない もしかすると不要?
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' ); //
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
        //テーマチェック対策 コメント返信のスクリプト
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        } 
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    //ウィジェット追加
    function wpbeg_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'wpbeg_widgets_init' );

    //複数のナビゲーションメニューの設定
    function register_hamburger_menus(){
        register_nav_menus( array(
            'side-menu'   => 'SideMenu',
            'footer-menu' => 'FooterMenu',
        ));
    }
    add_action( 'init', 'register_hamburger_menus');

    //表示件数のコントロール
    function change_posts_per_page($query) {
        if ( is_admin() || ! $query->is_main_query() )
            return;

        /* 検索ページの時に表示件数を5件にセット */
        if ( $query->is_search() ) {
            $query->set( 'posts_per_page', '5' );
        }
    }
    add_action( 'pre_get_posts', 'change_posts_per_page' );

    //カスタムヘッダー
    $args = array(
        'default-image' => get_template_directory_uri() . '/image/header.jpg',
        'uploads'       => true,
    );
    add_theme_support( 'custom-header', $args );

    add_editor_style();
    // テーマフォルダ直下のeditor-style.cssを読み込み
    add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets_custom_demo' );
    function gutenberg_stylesheets_custom_demo() {
    //現在適用しているテーマのeditor-style.cssを読み込む
    $editor_style_url = get_theme_file_uri('/editor-style.css');
    wp_enqueue_style( 'theme-editor-style', $editor_style_url );
    }

    //テーマチェック対策 コンテンツ幅の設定
    if ( ! isset( $content_width ) ) $content_width = 1920;

    //テーマチェック対策 自動フィードリンクの追加
    add_theme_support( 'automatic-feed-links' );

    //テーマチェック対策 カスタム背景の追加
    add_theme_support( 'custom-background' );
?>