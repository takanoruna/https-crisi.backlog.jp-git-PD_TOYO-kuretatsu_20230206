<?php
/**
* お知らせ
*
* @package WordPress
* @subpackage
* @since 1.0
* @version 1.0
*/
/*
Template Name: お知らせ
*/
get_header();
$h3_title = '全ての記事';
if(is_tax() || is_category()){
	$h3_title = single_cat_title("", false);
}
$cat_all = show_select_box_category();
?>
<?php get_header(); ?>

<div class="l-under-common p-news">
  <div class="l-under-common__part"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/top-part-news.png" alt=""></div>
  <div class="l-under-common__main">
    <h2 class="l-under-common__ttl"><span>お知らせ</span></h2>
    <p class="l-under-common__en">NEWS</p>
  </div>
  <div class="l-under-common__bg"></div>
</div>

<div class="l-breadcrumb">
  <ul class="l-container">
    <?php bcn_display_list();?>
  </ul>
</div>
<?php have_posts(); ?>

<main id="main" class="main p-news">

  <section class="p-news__section01" id="link01">
    <div class="l-container">
      <div class="select-area">
        <div class="select-box">
          <select class="select-category">
            <option value="<?php echo link_by_path('news/');?>">全ての記事</option>
            <?php echo $cat_all;?>
          </select>
        </div>
      </div>

      <h3 class="post-category-ttl"><?php echo $h3_title;?></h3>

      <div class="l-fluorescence-border--red">
        <div class="l-fluorescence-border__box">
          <div class="l-fluorescence-border__inner">
            <div class="l-fluorescence-border__white">
              <ul class="list-post-type01">
								<?php if (have_posts()) : while (have_posts()) : the_post();
								$cat_output = show_post_categories($post->ID, 'category', 'category');//inc/disp_taxonomy_list
								?>
                <li class="list-item">
                  <div class="post-data">
                    <time datetime="<?php the_time('c');?>"><?php the_time('Y.m.d');?></time>
                    <p class="post-category">
                      <?php echo $cat_output;?>
                    </p>
                  </div>
                  <h4 class="post-ttl"><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h4>
                </li>

								<?php
								endwhile;
								else:
									echo '<p>現在、表示する内容はありません。</p>';
								endif;
								?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <?php echo cms_pagination();?>
    </div>
  </section>
</main>

<?php get_footer();
