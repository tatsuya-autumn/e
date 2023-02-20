console.log("hello.world!");jQuery(function ($) {
// ボタンの表示設定
  const topBtn = $(".js-page-top");
  const mainviewheight = $(".js-mainview").outerHeight();
  $(window).scroll(function () {
    if ($(this).scrollTop() > mainviewheight) {
      pagetop.addClass("is-active");
    } else {
      pagetop.removeClass("is-active");
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  const header = $(".js-top-header");
  const headerBar = $(".js-headerBar");
  const headerHeight = $(".js-top-header").outerHeight(); //ヘッダーコンテンツ
  const mainviewHeight = $(".js-mainview").outerHeight(); //画像の高さを取得。これがイベント発火位置になる。
  const pagetop = $(".js-page-top"); //画像の高さを取得。これがイベント発火位置になる。

  $(window).on("load scroll", function () {
    if ($(window).scrollTop() < mainviewHeight) {
      //メインビジュアル内にいるので、クラスを外す。
      header.removeClass("headerColor");
    } else {
      //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
      header.addClass("headerColor");
      pagetop.addClass("is-active");
    }
  });
  // ヘッダー過ぎたら背景色とスクロールボタンにクラスを付与する
  let subHeader = $(".js-sub-header");
  let headerHeightSub = $(".js-sub-header").outerHeight(); //ヘッダーコンテンツ
  let imgHeightSub = $(".js-sub-mainview").outerHeight() - headerHeightSub; //画像の高さを取得。これがイベント発火位置になる。

  $(window).on("load scroll", function () {
    if ($(window).scrollTop() < imgHeightSub) {
      //メインビジュアル内にいるので、クラスを外す。
      subHeader.removeClass("headerColor");
    } else {
      //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
      subHeader.addClass("headerColor");
    }
  });

  // ナビバートグル
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("open")) {
      $(this).removeClass("open");
      $(".js-drawer-menu").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $("body").removeClass("noscroll");
    } else {
      $(this).addClass("open");
      $(".js-drawer-menu").addClass("is-active");
      $(".js-header").addClass("is-active");
      $("body").addClass("noscroll");
    }
  });
  // ナビメニュー内クリック   ナビメニュー外クリック
  $(".js-drawer-menu").on("click", function () {
    $(".js-hamburger").removeClass("open");
    $(".js-drawer-menu").removeClass("is-active");
    $(".js-header").removeClass("is-active");
    $("body").removeClass("noscroll");
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  const smooth_headerHeight = $(".js-header").outerHeight();
  const urlHash = location.hash;
  const time = 500;
  if (urlHash) {
    $(window).on("load", function () {
      $("body,html").stop().scrollTop(0);
      setTimeout(function () {
        var target = $(urlHash);
        var position = target.offset().top - smooth_headerHeight;
        $("body,html").stop().animate({ scrollTop: position }, time);
      }, 100);
    });
  }
  $(document).on("click", 'a[href*="#"]', function () {
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - smooth_headerHeight;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  /* 電話リンク */
  let ua = navigator.userAgent;
  if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
    jQuery('a[href^="tel:"]')
      .css("cursor", "default")
      .on("click", function (e) {
        e.preventDefault();
      });
  }
});