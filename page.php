<?php
/**
* 固定ページ下層テンプレート
*
* @package WordPress
* @subpackage kuretatsu
* @since 1.0
* @version 1.0
*/
?>
<?php get_header(); ?>
<?php if (is_page()):?>
  <div class="l-under-common p-<?php echo esc_attr($post->post_name);?>">
  <?php else:?>
    <div class="l-under-common">
    <?php endif;?>
    <div class="l-under-common__main">
      <div class="l-under-common__part"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/top-part-<?php echo esc_attr($post->post_name);?>.png" alt=""></div>
      <h2 class="l-under-common__ttl"><span><?php the_title(); ?></span></h2>
      <p class="l-under-common__en"><?php the_field('英字タイトル'); ?></p>
    </div>
    <div class="l-under-common__bg"></div>
  </div>
  <div class="l-breadcrumb">
    <ul class="l-container">
      <?php bcn_display_list();?>
    </ul>
  </div>
  <main id="main" class="main  p-<?php echo esc_attr($post->post_name);?>">
    <?php
    the_content();
    ?>
  </main>

  <?php get_footer();
