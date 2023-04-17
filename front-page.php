<?php
/**
* homeテンプレート
*
* @package WordPress
* @subpackage kuretatsu
* @since 1.0.0
* @version 1.0

*/
?>
<?php get_header(); ?>
<div class="p-hero">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/p-hero.jpg" alt="" class="u-pc">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/p-hero_sp.png" alt="" class="u-sp">
</div>

<div class="p-top__news">
  <div class="p-top__news__container">
    <h3 class="p-top__news__ttl">NEWS</h3>
    <?php
    $news_query = new WP_Query(
      array(
        'posts_per_page' => 1,
      )
    );
    ?>
    <?php if ( $news_query->have_posts() ) : ?>
      <?php while ( $news_query->have_posts() ) : ?>
        <?php $news_query->the_post();
        $post_title = apply_filters('the_title', strip_shortcodes($post->post_title));
        $post_content = apply_filters('the_content', strip_shortcodes($post->post_content));

        $terms = get_the_terms($post->ID, 'category');
        $cat_output = show_post_categories($post->ID, 'category', 'category');
        ?>
        <div class="p-top__news__item">
          <time datetime="<?php the_time('c');?>"><?php echo get_the_date(); ?></time>
          <div class="post-category">
            <?php echo $cat_output;?>
          </div>
          <p class="p-top__news__txt"><a href="<?php the_permalink(); ?>"><?php echo get_my_excerpt($post_title, 30);?></a></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</div>

<main id="l-main" class="l-main p-top">
  <section class="p-top__about" id="link01">
    <div class="p-top__about__main">
      <div class="p-top__about__main-area">
        <h3 class="l-box-ttl">
          <span class="l-box-ttl__item"><span>く</span></span>
          <span class="l-box-ttl__item"><span>れ</span></span>
          <span class="l-box-ttl__item"><span>達</span></span>
          <span class="l-box-ttl__item"><span>検</span></span>
          <span class="l-box-ttl__item"><span>定</span></span>
          <span class="l-box-ttl__item"><span>と</span></span>
          <span class="l-box-ttl__item"><span>は</span></span>
        </h3>
        <p class="l-box-ttl__sub u-mb30">（クレーンゲーム達人検定）</p>
        <div class="l-note-dot u-mb30">
          <p>「くれ達検定」とは、「クレーンゲーム達人検定」の略称で、<br class="u-pc">クレーンゲームを通じて笑顔を生み出すことのできる<br class="u-pc">『笑顔づくりの達人』のことをいいます。</p>
        </div>
        <div class="l-note-dot">
          <p>3級、2級、1級とそれぞれ検定が用意されております。<br>検定日当日に指導を受け、合格できるという仕組みです。</p>
        </div>
        <div class="p-top__about__main-imgsp">
          <div class="p-top__about__main-img01">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-about-img01.jpg" alt="">
          </div>
          <div class="p-top__about__main-img02">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-about-img02.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="p-top__about__news">
      <div class="js-part">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-about-img03.svg" alt="" class="p-top__about__news-img01 js-move js-katakata01">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-about-img04.svg" alt="" class="p-top__about__news-img02 js-move js-katakata02">
      </div>
      <div class="p-top__about__news-inner">
        <div class="p-top__about__news-ttl">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-about-img05.svg" alt="" class="p-top__about__news-img03">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-about-img06.svg" alt="" class="p-top__about__news-img04">
          <h3>くれ達NEWS</h3>
        </div>
        <div class="p-top__about__news-box">
          <ul class="p-top__about__news-list">
            <?php
            $news_query = new WP_Query(
              array(
                'posts_per_page' => 3,
                'category_name' => 'kuretatsu',
              )
            );
            ?>

            <?php if ( $news_query->have_posts() ) : ?>
              <?php while ( $news_query->have_posts() ) : ?>
                <?php $news_query->the_post();
                $post_title = apply_filters('the_title', strip_shortcodes($post->post_title));
                $post_content = apply_filters('the_content', strip_shortcodes($post->post_content));

                $terms = get_the_terms($post->ID, 'category');
                $cat_output = show_post_categories($post->ID, 'category', 'category');
                ?>
                <li class="p-top__about__news-item">
                  <time datetime="<?php the_time('c');?>"><?php echo get_the_date(); ?></time>
                  <p class="p-top__about__news-txt"><a href="<?php the_permalink();?>"><?php echo get_my_excerpt($post_title, 30);?></a></p>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="u-tac">
          <a href="<?php echo home_url('/category/kuretatsu/'); ?>" class="u-btn">一覧はこちら</a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-top__merit" id="link02">
    <div class="l-container">
      <h3 class="l-light-ttl"><span>くれ達検定のメリット</span></h3>
      <ul class="p-top__merit__list js-part">
        <li class="p-top__merit__item">
          <div class="p-top__merit__num js-poyoyon"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-num01.svg" alt="1"></div>
          <div class="p-top__merit__inr">
            <div class="p-top__merit__img">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-img01.jpg" alt="">
            </div>
            <h4 class="p-top__merit__ttl">クレーンゲームについて学べる！！</h4>
            <p class="p-top__merit__txt">クレーンゲームの歴史、ゲーム機の種類や特徴を学びます。<br class="u-pc">さらに、景品の大きさ・形状・重さを知ることによって、<br class="u-pc">景品獲得技が異なり、色々な技を検定講座で<br class="u-pc">詳しく学ぶことができます。</p>
          </div>
        </li>
        <li class="p-top__merit__item">
          <div class="p-top__merit__num js-poyoyon delay-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-num02.svg" alt="2"></div>
          <div class="p-top__merit__inr">
            <div class="p-top__merit__img">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-img02.jpg" alt="">
            </div>
            <h4 class="p-top__merit__ttl">上達してたくさんゲットしよう！！</h4>
            <p class="p-top__merit__txt">クレーンゲームの達人になることによって、友人、恋人、<br class="u-pc">家族にクレーンゲーム限定の景品をプレゼントできるようになります。</p>
          </div>
        </li>
        <li class="p-top__merit__item">
          <div class="p-top__merit__num js-poyoyon delay-6"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-num03.svg" alt="3"></div>
          <div class="p-top__merit__inr">
            <div class="p-top__merit__img">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-img03.jpg" alt="">
            </div>
            <h4 class="p-top__merit__ttl">加盟店でサービス・特典を<br class="u-pc">受けられる</h4>
            <p class="p-top__merit__txt">くれ達検定で合格すると、認定書・認定カードが<br class="u-pc">もらえます。認定カードを加盟店で提示すると、<br class="u-pc">サービスや特典を受けることができます。</p>
          </div>
        </li>
        <li class="p-top__merit__item">
          <div class="p-top__merit__num js-poyoyon delay-8"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-num04.svg" alt="4"></div>
          <div class="p-top__merit__inr">
            <div class="p-top__merit__img">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-merit-img04.jpg" alt="">
            </div>
            <h4 class="p-top__merit__ttl">1級取得者は業界で活躍できる</h4>
            <p class="p-top__merit__txt">1級を取得した後、加盟店による職業斡旋や<br class="u-pc">クレーンゲーム講師など、アミューズメント業界で<br class="u-pc">活躍の場を広げられます。<br class="u-pc">アミューズメント施設経営者にとっては、<br class="u-pc">くれ達取得者の技術、知識、考え方を生かせば、<br class="u-pc">アミューズメント事業の活性化、売上向上につながります。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-top__content" id="link03">
    <div class="l-container">
      <h3 class="l-light-ttl"><span>くれ達検定の内容</span></h3>
      <ul class="p-top__content__list">
        <li class="p-top__content__item">
          <div class="p-top__content__voice"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-voice01.svg" alt=""></div>
          <div class="p-top__content__box">
            <div class="p-top__content__lank">
              <span>くれ達<br><span class="p-top__content__lank-min">3</span>級</span>
            </div>
            <h4 class="p-top__content__ttl">腕を上げて楽しみたい<br>一般プレーヤー</h4>
            <a href="<?php echo home_url('third-grade/'); ?>" class="u-btn u-min">詳しくはこちら</a>
          </div>
        </li>
        <li class="p-top__content__item">
          <div class="p-top__content__voice"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-voice02.svg" alt=""></div>
          <div class="p-top__content__box">
            <div class="p-top__content__lank">
              <span>くれ達<br><span class="p-top__content__lank-min">2</span>級</span>
            </div>
            <h4 class="p-top__content__ttl">3級の技術を<br>実践で使えるプレーヤー</h4>
            <a href="<?php echo home_url('second-grade/'); ?>" class="u-btn u-min">詳しくはこちら</a>
          </div>
        </li>
        <li class="p-top__content__item">
          <div class="p-top__content__voice"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-voice03.svg" alt=""></div>
          <div class="p-top__content__box">
            <div class="p-top__content__lank">
              <span>くれ達<br><span class="p-top__content__lank-min">1</span>級</span>
            </div>
            <h4 class="p-top__content__ttl">さらに腕を上げて<br>達人になりたいプレーヤー</h4>
            <p>Coming Soon...</p>
          </div>
        </li>
      </ul>

      <div class="p-top__content__video">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-video01.svg" alt="" class="p-top__content__video-ttl">
        <div  class="p-top__content__video-main">
          <a href="" class="js-modal-open" data-target="modal01">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-video02.png" alt="">
          </a>
        </div>
      </div>
      <div class="u-tac">
        <a href="<?php echo home_url('about_kuretatu/'); ?>" class="u-btn">くれ達についてはこちら</a>
      </div>
    </div>
  </section>
  <div id="modal01" class="l-modal js-modal">
    <div class="l-modal-bg js-modal-close"></div>
    <div class="l-modal-content">
      <div class="l-modal-content-inr">
        <div class="u-video">
          <iframe id="y-video" width="560" height="315" src="https://www.youtube.com/embed/jjHu2QcZ0N4?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <a class="js-modal-close l-modal-close" href="javascript:void(0)">×</a>
    </div><!--modal__inner-->
  </div><!--modal-->

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
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-txt.svg" alt="" class="l-challenge__img-txt">
    </div>
  </section>

  <section class="p-top__management" id="link05">
    <div class="l-container">
      <h3 class="p-top__management__ttl">くれ達検定は<br>日本クレーンゲーム協会が<br class="u-sp">運営しています</h3>
      <p class="p-top__management__txt">私たち、一般社団法人日本クレーンゲーム協会は、アミューズメント業界の発展のため、<br class="u-pc">クレーンゲームの普及や人材育成に努めております。</p>
      <div class="l-bk-border-box-wrap">
        <div class="l-bk-border-box p-top__management__box01 js-part">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-management-part01.svg" alt="" class="p-top__management__part01 js-move js-katakata02">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-management-part02.svg" alt="" class="p-top__management__part02 js-move js-poyopoyo">
          <h4 class="l-bk-border-ttl"><span class="l-bk-border-ttl-inr">日本クレーンゲーム協会の<br class="u-sp">役割</span></h4>
          <ul class="p-top__management__layout">
            <li class="p-top__management__item">
              <a href="<?php echo home_url('association#link03'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-management-img01.png" alt=""></a>
            </li>
            <li class="p-top__management__item">
              <a href="<?php echo home_url('association#link04'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-management-img02.png" alt=""></a>
            </li>
          </ul>
          <div class="u-tac">
            <a href="<?php echo home_url('association/'); ?>" class="u-btn u-blue">一覧はこちら</a>
          </div>
        </div>

        <div class="l-bk-border-box p-top__management__box02 js-part">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-management-part03.svg" alt="" class="p-top__management__part03 js-move js-poyopoyo">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-management-part04.svg" alt="" class="p-top__management__part04 js-move js-katakata01">
          <h4 class="l-bk-border-ttl"><span class="l-bk-border-ttl-inr">クレーンゲーム協会の<br class="u-sp">活動実績</span></h4>
          <div class="p-top__management__slide-over">
            <div class="p-top__management__slide">
              <?php
              $activity_query = new WP_Query(
                array(
                  'post_type' => 'activity',
                  'posts_per_page' => -1,
                )
              );
              ?>
              <?php if ( $activity_query->have_posts() ) : ?>
                <?php while ( $activity_query->have_posts() ) : ?>
                  <?php $activity_query->the_post();
                  $post_title = apply_filters('the_title', strip_shortcodes($post->post_title));
                  $post_content = apply_filters('the_content', strip_shortcodes($post->post_content));
                  $thumb_url = output_img_src($post->ID);
                  $thumb_noimage = get_template_directory_uri();
                  $thumb_output = '';
                  if($thumb_url){
                    $thumb_output = '
                    <figure class="p-top__management__slide-img">'.$thumb_url.'</figure>';
                  } else {
                    $thumb_output = '<figure class="p-top__management__slide-img"><img src="'.esc_url($thumb_noimage).'/assets/images/top/top-management-slide01.jpg" alt=""></figure>';
                  }
                  ?>
              <div class="p-top__management__slide-item">
                <?php echo $thumb_output;?>
                <div class="p-top__management__slide-desc">
                  <p class="p-top__management__slide-ttl"><?php echo get_my_excerpt($post_title, 26);?></p>
                  <p class="p-top__management__slide-txt"><?php echo get_my_excerpt($post_content, 66);?></p>
                  <a href="<?php the_permalink(); ?>" class="p-top__management__slide-link">もっと見る</a>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="u-tac">
            <a href="<?php echo home_url('activity/'); ?>" class="u-btn u-blue">一覧はこちら</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="p-top__media" id="link06">
    <div class="l-container">
      <div class="p-top__media__bg"></div>
      <div class="p-top__media__main js-part">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-media-img01.svg" alt="" class="p-top__media__img01">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-media-img02.svg" alt="" class="p-top__media__img02 js-move js-katakata01">
        <h3 class="p-top__media__ttl">メディアの方へ</h3>
        <p class="p-top__media__txt">私たち、一般社団法人日本クレーンゲーム協会はアミューズメン業界の発展のため、<br class="u-pc">クレーンゲームの普及や人材育成に努めております。<br>協会では、新聞・雑誌・TV・ラジオなどの各種メディアからの取材を積極的にお受けしています。</p>
        <a href="<?php echo home_url('contact/'); ?>" class="u-btn u-blue u-large">お問い合わせはこちら</a>
      </div>
    </div>
    <div class="l-light-board">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/l-light-board.svg" alt=""><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/l-light-board.svg" alt=""><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/l-light-board.svg" alt="">
    </div>
  </section>

  <section class="p-top__trend" id="link07">
    <div class="l-container">
      <div class="p-top__trend__main">
        <p class="p-top__trend__top">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-trend-img02.svg" alt="" class="p-top__trend__img01">
          <span class="u-blue">クレーンゲームが</span>
          <span class="u-yellow">今トレンド!?</span>
        </p>
        <h3 class="p-top__trend__ttl">オンライン化が進む中でも<br>ご家族や友人と喜びや感動を共有できるクレーンゲームが<br>近年更に注目されています！</h3>
        <div class="p-top__trend__grid">
          <div class="p-top__trend__txt">
            目当てのぬいぐるみが欲しいのに、取れそうで取れない。「もう1回！」と熱くなった方も少なくないのではないでしょうか？<br>オンラインゲームでは味わうことができない興奮と感動をリアルに共有できるクレーンゲーム。<br>特にお子様連れのご家族に大人気です。<br><br>また、法改正により景品の品質向上、魅力的な景品、クレーンゲームでしか手に入らないオリジナル景品の希少性から幅広い年代の方から注目を集めています。
          </div>
          <div class="p-top__trend__img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-trend-img01.jpg" alt="">
          </div>
        </div>
      </div>


      <div class="p-top__trend__bnr">
        <a href="<?php echo home_url('about_crane-game/'); ?>">
          <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-trend-bnr02.svg" alt="" class="p-top__trend__bnr-img01"> -->
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-trend-bnr.jpg" alt="" class="u-pc">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-trend-bnr_sp.png" alt="" class="u-sp">
        </a>
      </div>
    </div>
  </section>

  <section class="p-top__sale" id="link08">
    <div class="l-container">
      <div class="p-top__sale__main js-part">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-sale-img02.svg" alt="" class="p-top__sale__img02 u-pc js-move js-poyopoyo">
        <h4 class="p-top__sale__ttl"><span class="p-top__sale__ttl-inr">クレーンゲームの<br class="u-sp">攻略本発売中!!</span></h4>
        <div class="p-top__sale__box">
          <div class="p-top__sale__img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-sale-img01.jpg" alt="">
          </div>
          <div class="p-top__sale__desc">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-sale-img02.svg" alt="" class="p-top__sale__img02 u-sp">
            <p class="p-top__sale__about">収録内容</p>
            <div class="p-top__sale__txt">
              <ul class="p-top__sale__list">
                <li>プロ直伝のテクニック12の技</li>
                <li>プロに聞くクレーンゲームの ウソ× ホント○</li>
                <li>捨て100クレーンゲーム業界の裏話</li>
                <li>ゲームセンター店員に聞いた クレーンゲームあるある</li>
                <li>ゼロから分かるクレーンゲームの基本</li>
              </ul>
              <p class="p-top__sale__min">等々...</p>
            </div>
            <a href="https://www.amazon.co.jp/%E3%82%AF%E3%83%AC%E3%83%BC%E3%83%B3%E3%82%B2%E3%83%BC%E3%83%A0%E6%94%BB%E7%95%A5%E5%A4%A7%E5%85%A8-%E7%99%BD%E5%A4%9C%E3%83%A0%E3%83%83%E3%82%AF630-%E6%97%A5%E6%9C%AC%E3%82%AF%E3%83%AC%E3%83%BC%E3%83%B3%E3%82%B2%E3%83%BC%E3%83%A0%E5%8D%94%E4%BC%9A/dp/4864942870" target="_blank" rel=”noopener noreferrer” class="u-btn u-blue u-large">購入はこちら</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-challenge" id="link09">
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
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/share/challenge-txt.svg" alt="" class="l-challenge__img-txt">
    </div>
  </section>


  <section class="l-contact" id="link10">
    <div class="l-container">
      <ul class="l-contact__grid">
        <li class="l-contact__item">
          <div class="l-contact__box l-contact__tel">
            <div class="l-contact__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-icon-tel.svg" alt=""></div>
            <p class="l-contact__ttl">お電話からの<br class="u-sp">お問い合わせはこちら</p>
            <a href="tel:05068775614" class="l-contact__num">050-6877-5614</a>
            <p class="l-contact__min">営業時間：10:00〜17:00</p>
          </div>
        </li>
        <li class="l-contact__item">
          <div class="l-contact__box l-contact__mail">
            <div class="l-contact__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-icon-mail.svg" alt=""></div>
            <p class="l-contact__ttl">メールからの<br class="u-sp">お問い合わせはこちら</p>
            <a href="<?php echo home_url('contact/'); ?>" class="u-btn">お問い合わせはこちら</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php get_footer();
