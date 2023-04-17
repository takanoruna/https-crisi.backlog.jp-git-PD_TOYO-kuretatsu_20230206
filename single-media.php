<?php
/**
 * クレーンゲーム協会の活動
 *
 * @package WordPress
 * @subpackage kuretatsu
 * @since 1.0
 * @version 1.0
 */

?>
<?php get_header(); ?>
<div class="l-under-common p-activity">
  <div class="l-under-common__part"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/top-part-activity.png" alt=""></div>
  <div class="l-under-common__main">
    <h2 class="l-under-commonttl"><span>メディアの方へ</span></h2>
    <p class="l-under-common__en__">MEDIA</p>
  </div>
  <div class="l-under-common__bg"></div>
</div>

<div class="l-breadcrumb">
  <ul class="l-container">
    <?php bcn_display_list();?>
  </ul>
</div>


<main id="main" class="main p-activity">

  <section class="p-activity__section01" id="link01">
    <div class="l-container">
      <div class="p-activity__single">
        <div class="p-activity__single-inner">
          <div class="post-single">
            <h2 class="post-ttl"><?php the_title();?></h2>
            <div class="postdata">
              <?php the_content();?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>




<?php get_footer();
