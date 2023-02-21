<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->

  <title>屋根プラス</title>
  <meta name="description" content="内容をディレクターに確認してください" />
  <meta name="keywords" content="内容をディレクターに確認してください" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="faviconデータをディレクターに確認してください" />
  <!-- css -->
  <link rel="stylesheet" href="./assets/css/">
  <!-- JavaScript -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="c-page-top js-page-top"></div>


  <header class="l-header p-header js-header">
    <div class="p-header__inner">

      <?php if (is_front_page()) {
        echo '<h1 class="p-header__logo">';
      } else {
        echo '<div class="p-header__logo">';
      } ?><a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="" alt="<?php bloginfo('name'); ?>"></a>
      <?php if (is_front_page()) {
        echo '</h1>';
      } else {
        echo '</div>';
      } ?>
      <div class="p-header__right">
        <nav class="p-header__nav p-gnav u-desktop">
          <ul class="p-gnav__items">
            <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/')); ?>">About</a></li>
            <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/')); ?>">Service</a></li>
            <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/')); ?>">Contents</a></li>
            <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/')); ?>">News</a></li>
            <li class="p-gnav__item p-gnav__item-box-bacground--white"><a href="<?php echo esc_url(home_url('/')); ?>">Contact<p class="c-arrow-img--white"></p> </a></li>
            <li class="p-gnav__item p-gnav__item-box-bacground--black"><a href="<?php echo esc_url(home_url('/')); ?>">Shop</a></li>
          </ul>
        </nav>

      </div>
      <div class="p-header__drawer c-hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="p-header__overlay js-header-overlay"></div>
    <div class="p-header__menu p-drawer-menu js-drawer-menu u-mobile">
      <div class="p-drawer-menu__name"></div>
      <div class="p-drawer-menu__logo">
        <a class="c-drawer-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="" alt="yaneplus"></a>
      </div>
      <ul class="p-drawer-menu__items js-drawer-bottom">

        <li class="p-drawer-menu__item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="p-drawer-menu__item"><a href="<?php echo esc_url(home_url('/')); ?>">About</a></li>
        <li class="p-drawer-menu__item"><a href="<?php echo esc_url(home_url('/')); ?>">Service</a>
          <ul class="p-drawer-menu-subnav__item-wrapper">
            <li class="p-drawer-menu-subnav__item">
              <a class="p-drawer-menu-subnav__link" href="<?php echo esc_url(home_url('/')); ?>">-パーツ販売</a>

            </li>
            <li class="p-drawer-menu-subnav__item">
              <a class="p-drawer-menu-subnav__link" href="<?php echo esc_url(home_url('/')); ?>">-車両整備</a>
            </li>
          </ul>
        </li>
        <li class="p-drawer-menu__item"><a href="<?php echo esc_url(home_url('/')); ?>">Contents</a></li>
        <li class="p-drawer-menu__item"><a href="<?php echo esc_url(home_url('/')); ?>">News</a></li>

      </ul>
      <div class="p-drawer-menu__btns p-btns">
        <a href="" class="c-button--black">Contact</a>
        <a href="" class="c-button--white">Shop</a>
      </div>
    </div>

  </header>
  <div class="p-space"></div>