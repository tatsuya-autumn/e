<?php

/**
 * Functions
 */
// リンク・画像用
define('IMG', get_template_directory_uri() . '/assets/img/');

function url($link)
{
  echo esc_url(home_url($link));
}


function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( // HTML5でマークアップ
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
  wp_enqueue_style('style.css', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.1', 'all');
  // 自作jsファイルの読み込み
  // if (is_front_page()) {
  //   wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
  //   wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/swiper/swiper.min.css', array(), '1.0.1', 'all');
  //   wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/swiper-original.js', array('jquery'), '1.0.1', true);
  // } elseif (is_page('about')) {
  //   wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
  //   wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/swiper/swiper.min.css', array(), '1.0.1', 'all');
  //   wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/swiper-original.js', array('jquery'), '1.0.1', true);
  // } elseif (is_page('parts')) {
  //   wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
  //   wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/swiper/swiper.min.css', array(), '1.0.1', 'all');
  //   wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/swiper-original.js', array('jquery'), '1.0.1', true);
  // }

  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/swiper/swiper.min.css', array(), '1.0.1', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
};
add_action('wp_enqueue_scripts', 'my_script_init');
