<?php
  function my_setup()
  {
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support('html5', array( // HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      )
    );
  };
  add_action('after_setup_theme', 'my_setup');

  /* CSSとJavaScriptの読み込み */
  function my_script_init()
    {
      // 自作jsファイルの読み込み
      wp_enqueue_script( 'main', get_template_directory_uri() . 'assets/js/main.js', array(), '1.0.1', true );
      // 自作cssファイルの読み込み
      wp_enqueue_style( 'style-name', get_template_directory_uri() . 'assets/css/style.css', array(), '1.0.1', false );
    };
  add_action('wp_enqueue_scripts', 'my_script_init');