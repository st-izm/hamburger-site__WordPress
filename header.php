<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に出力 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <meta name="description" content="ページの内容を表す文章///WordPressを利用したハンバーガー屋さんのサイトです" />
    <meta name="keywords" content="WordPress, Theme, practice">
    
    <?php wp_head(); ?> <!-- WordPressのテーマに含める関数 -->
</head>

<body class="js-body" <?php body_class( $class ); ?>>
<div class="js-fade-layer js-close"></div> <!--サイドメニューopen時暗くするフェード  このフェードをクリックしてもnavは閉じる-->
<main class="l-main">
    <article class="l-main__left">
        <!-- Header Start -->
        <header class="l-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h1 class="c-titles c-titles--header" ><?php bloginfo( 'name' ); ?></h1>
            </a>
            <div class="p-search">
                <?php get_search_form(); ?>
            </div>
            <button class="js-menu c-button--sideMenu">Menu</button>
        </header>
        <!-- Header  End-->
