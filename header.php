<?php
/**
 * headerテンプレート
 *
 * @package WordPress
 * @subpackage kuretatsu
 * @since 1.0.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php if (preg_match("/Android|iPhone/", $_SERVER[ "HTTP_USER_AGENT" ])) : ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">
    <?php else: ?>
    <meta name="viewport" content="width=1200">
    <?php endif; ?>
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/share/favicon.png" sizes="64x64">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/share/apple-touch-icon.png" sizes="152x152">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/lib/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/lib/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css?20230328">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head();?>
</head>

<body>
  <header class="l-header">
    <div class="l-header-inr">
      <h1 class="l-header__logo">
        <a href="<?php echo home_url('/'); ?>" class=""><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/logo.svg" alt="日本クレーンゲーム協会"></a>
      </h1>
      <div class="l-header-right">
        <ul class="l-header__btn">
          <li class=" l-header__btn-01"><a href="<?php echo home_url('contact/'); ?>" class="u-btn">お問い合わせ</a></li>
          <li class=" l-header__btn-02"><a href="<?php echo home_url('about_kuretatu/'); ?>#link01" class="u-btn">くれ達検定を受ける</a></li>
        </ul>
        <nav class="pc-navi">
          <ul class="pc-navi-list">
            <li class="item"><a href="<?php echo home_url('/'); ?>" class="item-link">TOP</a></li>
            <li class="item pc-dropdown">
            <span class="item-link">協会について</span>
              <ul class="pc-navi-child">
                <li><a href="<?php echo home_url('association/'); ?>">協会について</a></li>
                <li><a href="<?php echo home_url('nakamurahistory/'); ?>">代表 中村の歴史</a></li>
                <li><a href="<?php echo home_url('activity/'); ?>">協会の活動</a></li>
              </ul>
            </li>
            <li class="item pc-dropdown">
              <span class="item-link">くれ達検定について</span>
              <ul class="pc-navi-child">
                <li><a href="<?php echo home_url('about_kuretatu/'); ?>">くれ達検定について</a></li>
                <li><a href="<?php echo home_url('third-grade/'); ?>">検定 3級</a></li>
                <li><a href="<?php echo home_url('second-grade/'); ?>">検定 2級</a></li>
              </ul>
            </li>
            <li class="item pc-dropdown">
              <span class="item-link">クレーンゲームについて</span>
              <ul class="pc-navi-child">
                <li><a href="<?php echo home_url('about_crane-game/'); ?>">クレーンゲームについて一覧</a></li>
                <li><a href="<?php echo home_url('c-history/'); ?>">クレーンゲーム機械の歴史</a></li>
                <li><a href="<?php echo home_url('w-crane/'); ?>">世界のクレーンゲーム</a></li>
                <li><a href="<?php echo home_url('interest/'); ?>">おもしろクレーンゲーム紹介</a></li>
              </ul>
            </li>
            <li class="item"><a href="<?php echo home_url('seniors/'); ?>" class="item-link">シニアがはまるクレーンゲーム</a></li>
            <li class="item pc-dropdown">
              <span class="item-link">お知らせ</span>
              <ul class="pc-navi-child">
                <li><a href="<?php echo home_url('news/'); ?>">お知らせ一覧</a></li>
                <li><a href="<?php echo home_url('category/kuretatsu/'); ?>">検定について</a></li>
                <li><a href="<?php echo home_url('category/press-release/'); ?>">プレスリリース</a></li>
                <li><a href="<?php echo home_url('category/other/'); ?>">その他</a></li>
              </ul>
            </li>
            <li class="item"><a href="<?php echo home_url('media/'); ?>" class="item-link">メディアの方へ</a></li>
          </ul>
        </nav>
      </div>
      <div class="humberger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>


    <nav class="sp-navi">
      <div class="sp-navi-contents">

        <ul class="sp-navi-list">
          <li class="item sp-dropdown">
          <span class="item-link">協会について</span>
            <ul class="sp-navi-child">
              <li><a href="<?php echo home_url('association/'); ?>">協会について</a></li>
              <li><a href="<?php echo home_url('nakamurahistory/'); ?>">代表 中村の歴史</a></li>
              <li><a href="<?php echo home_url('activity/'); ?>">協会の活動</a></li>
            </ul>
          </li>
          <li class="item sp-dropdown">
            <span class="item-link">くれ達検定について</span>
            <ul class="sp-navi-child">
              <li><a href="<?php echo home_url('about_kuretatu/'); ?>">くれ達検定について</a></li>
              <li><a href="<?php echo home_url('third-grade/'); ?>">検定 3級</a></li>
              <li><a href="<?php echo home_url('second-grade/'); ?>">検定 2級</a></li>
            </ul>
          </li>
          <li class="item sp-dropdown">
            <span class="item-link">クレーンゲームについて</span>
            <ul class="sp-navi-child">
              <li><a href="<?php echo home_url('about_crane-game/'); ?>">クレーンゲームについて一覧</a></li>
              <li><a href="<?php echo home_url('c-history/'); ?>">クレーンゲーム機械の歴史</a></li>
              <li><a href="<?php echo home_url('w-crane/'); ?>">世界のクレーンゲーム</a></li>
              <li><a href="<?php echo home_url('interest/'); ?>">おもしろクレーンゲーム紹介</a></li>
            </ul>
          </li>
          <li class="item"><a href="<?php echo home_url('seniors/'); ?>" class="item-link">シニアがはまるクレーンゲーム</a></li>
          <li class="item sp-dropdown">
            <span class="item-link">お知らせ</span>
            <ul class="sp-navi-child">
              <li><a href="<?php echo home_url('news/'); ?>">お知らせ一覧</a></li>
              <li><a href="<?php echo home_url('category/kuretatsu/'); ?>">検定について</a></li>
              <li><a href="<?php echo home_url('category/press-release/'); ?>">プレスリリース</a></li>
              <li><a href="<?php echo home_url('category/other/'); ?>">その他</a></li>
            </ul>
          </li>
          <li class="item"><a href="<?php echo home_url('media/'); ?>" class="item-link">メディアの方へ</a></li>
        </ul>
      </div>
    </nav>

    <!-- <nav class="sp-navi">
      <div class="sp-navi-contents">
        <ul class="sp-navi-list">
          <li class="item"><a href="<?php echo home_url('/'); ?>" class="item-link"><span class="jp">TOP</span></a></li>
          <li class="item sp-dropdown">
            <a href="<?php echo home_url('association/'); ?>" class="item-link">協会について</a>
            <ul class="sp-navi-child">
              <li><a href="<?php echo home_url('nakamurahistory/'); ?>">代表 中村の歴史</a></li>
            </ul>
          </li>
          <li class="item sp-dropdown">
              <a href="<?php echo home_url('about_kuretatu/'); ?>" class="item-link">くれ達検定について</a>
              <ul class="sp-navi-child">
                <li><a href="<?php echo home_url('third-grade/'); ?>">検定 3級</a></li>
                <li><a href="<?php echo home_url('second-grade/'); ?>">検定 2級</a></li>
              </ul>
            </li>
            <li class="item sp-dropdown">
              <a href="<?php echo home_url('about_crane-game/'); ?>" class="item-link">クレーンゲームについて</a>
              <ul class="sp-navi-child">
                <li><a href="<?php echo home_url('c-history/'); ?>">クレーンゲーム機械の歴史</a></li>
                <li><a href="<?php echo home_url('w-crane/'); ?>">世界のクレーンゲーム</a></li>
                <li><a href="<?php echo home_url('interest/'); ?>">おもしろクレーンゲーム紹介</a></li>
              </ul>
            </li>
            <li class="item"><a href="<?php echo home_url('seniors/'); ?>" class="item-link">シニアがはまるクレーンゲーム</a></li>
            <li class="item"><a href="<?php echo home_url('activity/'); ?>" class="item-link">協会の活動</a></li>
            <li class="item sp-dropdown">
              <span class="item-link">お知らせ</span>
              <ul class="sp-navi-child">
                <li><a href="<?php echo home_url('news/'); ?>">お知らせ一覧</a></li>
                <li><a href="<?php echo home_url('category/kuretatsu/'); ?>">検定について</a></li>
                <li><a href="<?php echo home_url('category/ress-release/'); ?>">プレスリリース</a></li>
                <li><a href="<?php echo home_url('category/other/'); ?>">その他</a></li>
              </ul>
            </li>
            <li class="item"><a href="<?php echo home_url('media/'); ?>" class="item-link">メディアの方へ</a></li>
        </ul>
      </div>
    </nav> -->
  </header>

  <div class="l-fixed-btn">
    <a href="https://www.amazon.co.jp/%E3%82%AF%E3%83%AC%E3%83%BC%E3%83%B3%E3%82%B2%E3%83%BC%E3%83%A0%E6%94%BB%E7%95%A5%E5%A4%A7%E5%85%A8-%E7%99%BD%E5%A4%9C%E3%83%A0%E3%83%83%E3%82%AF630-%E6%97%A5%E6%9C%AC%E3%82%AF%E3%83%AC%E3%83%BC%E3%83%B3%E3%82%B2%E3%83%BC%E3%83%A0%E5%8D%94%E4%BC%9A/dp/4864942870" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/p-hero-link.svg" alt=""></a>
    <p class="l-fixed-btn-close"><a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/p-hero-close.svg" alt=""></a></p>
  </div>
