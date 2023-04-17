<?php
the_post();

get_header();?>
<div class="l-under-common p-association">
  <div class="l-under-common__part"><img src="assets/images/under/top-part-association.png" alt=""></div>
  <div class="l-under-common__main">
    <h2 class="l-under-common__ttl"><span>404 Not Found</span></h2>
    <p class="l-under-common__en">NOT FOUNND</p>
  </div>
  <div class="l-under-common__bg"></div>
</div>
<div class="l-breadcrumb">
  <ul class="l-container">
    <?php bcn_display_list();?>
  </ul>
</div>
<main id="main" class="main p-association">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();

    the_content();

    endwhile;
    else:
      ?>
    <section class="p-association__section01">
      <div class="l-container">
        <p class="u-mb30">指定されたページは見つかりませんでした。</p>
        <p><a href="<?php echo home_url('/'); ?>" class="u-btn">トップページへ</a></p>
      </div>
    </section>
    <?php endif; ?>
</main>
<?php
// get_sidebar();
get_footer();
