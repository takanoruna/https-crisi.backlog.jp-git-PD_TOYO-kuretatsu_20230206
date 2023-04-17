<?php
/**
 * footerテンプレート
 *
 * @package WordPress
 * @subpackage kuretatsu
 * @since 1.0.0
 * @version 1.0
 */
?>
<?php if ( !is_front_page() ) : ?>
<section class="l-challenge" id="link04">
  <div class="l-challenge__main">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-img01.svg" alt="" class="l-challenge__img01">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-img02.svg" alt="" class="l-challenge__img02">
    <h3 class="l-challenge__ttl">クレーンゲームの実力、<br>試してみない？</h3>
    <div class="u-tac">
      <a href="<?php echo home_url('about_kuretatu/'); ?>#link01" class="l-challenge__btn">くれ達お申し込みはこちら</a>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-img05.svg" alt="" class="l-challenge__img05">
    </div>
  </div>

  <div class="l-challenge__btm">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-img03.svg" alt="" class="l-challenge__img03">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-img04.svg" alt="" class="l-challenge__img04">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-txt.svg" alt="">
  </div>
</section>
<?php endif; ?>
<!-- footer area -->
<footer id="l-footer" class="l-footer">
  <div class="l-footer__main">
    <div class="l-footer__box">
      <div class="l-footer__box-img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/footer_img01.png" alt="">
      </div>
      <div class="l-footer__info">
        <div class="l-footer__logo">
          <a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/footer-logo.svg" alt="日本クレーンゲーム協会"></a>
        </div>
        <ul class="l-footer__sns">
          <li class="l-footer__sns-item"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/icon_twitter.svg" alt=""></a></li>
          <li class="l-footer__sns-item"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/icon_insta.svg" alt=""></a></li>
          <li class="l-footer__sns-item"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/icon_youtube.svg" alt=""></a></li>
          <li class="l-footer__sns-item"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/icon_facebook.svg" alt=""></a></li>
        </ul>
      </div>
    </div>
    <div class="l-footer__navi">
      <div class="l-footer__navi-box">
        <ul class="l-footer__navi-list">
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('association/'); ?>">協会について</a>
          </li>
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('nakamurahistory/'); ?>">代表理事中村秀夫の歴史</a>
          </li>
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('activity/'); ?>">協会の活動</a>
          </li>
        </ul>
        <ul class="l-footer__navi-list">
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('about_crane-game/'); ?>">クレーンゲームについて</a>
          </li>
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('c-history/'); ?>">クレーンゲーム機械の歴史</a>
          </li>
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('w-crane/'); ?>">世界のクレーンゲーム</a>
          </li>
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('interest/'); ?>">おもしろクレーンゲーム紹介</a>
          </li>
        </ul>
      </div>
      <div class="l-footer__navi-box">
        <ul class="l-footer__navi-list">
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('about_kuretatu/'); ?>">くれ達検定について</a>
          </li>
          <!-- <li class="l-footer__navi-item">
            <a href="<?php echo home_url('/'); ?>">1級</a>
          </li> -->
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('second-grade/'); ?>">2級</a>
          </li>
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('third-grade/'); ?>">3級</a>
          </li>
        </ul>
        <ul class="l-footer__navi-list">
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('media/'); ?>">メディアの方へ</a>
          </li>
        </ul>
        <ul class="l-footer__navi-list">
          <li class="l-footer__navi-item">
            <a href="<?php echo home_url('seniors/'); ?>">シニアがはまるクレーンゲーム</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="l-footer__btm">
    <div class="l-container">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/footer_leg.svg" alt="" class="l-footer__leg01">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/footer_leg.svg" alt="" class="l-footer__leg02">
      <p class="l-copyright"><small>Copyright(c) 一般社団法人日本クレーンゲーム協会All Rights Reserved.</small></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/lib/jquery-3.5.1.min.js"></script>
<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/lib/jquery.waypoints.min.js"></script>
<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/lib/slick.min.js"></script>
<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>



</body>
</html>
