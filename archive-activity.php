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
    <h2 class="l-under-common__ttl"><span>クレーンゲーム協会の<br>活動</span></h2>
    <p class="l-under-common__en">ACTIVITY</p>
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
      <ul class="p-activity__list">
        <?php
        $args = array(
            'post_type' => 'activity',
            'posts_per_page' => 6, // 投稿件数の指定
            'paged' => get_query_var('paged'),
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
            $post_content = apply_filters('the_content', strip_shortcodes($post->post_content));
            $thumb_url = output_img_src($post->ID);
            $thumb_noimage = get_template_directory_uri();
            $thumb_output = '';
            if($thumb_url){
              $thumb_output = '
              <figure class="l-case__img">'.$thumb_url.'</figure>';
            } else {
              $thumb_output = '<figure class="p-activity__img"><img src="'.esc_url($thumb_noimage).'/assets/images/under/activity-dummy.jpg" alt=""></figure>';
            }
            ?>
        <li class="p-activity__item">
          <?php echo $thumb_output;?>
          <div class="p-activity__box">
            <h3 class="p-activity__ttl"><?php echo get_the_title();?></h3>
            <div class="u-tac">
              <a href="<?php the_permalink();?>" class="p-activity__btn">詳細はこちら</a>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>

      </ul>
      <?php echo cms_pagination();?>
    </div>
  </section>
</main>

<?php get_footer();
