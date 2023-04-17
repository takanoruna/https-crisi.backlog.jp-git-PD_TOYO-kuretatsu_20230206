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
<div class="l-under-common p-media">
  <div class="l-under-common__part"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/top-part-media.png" alt=""></div>
  <div class="l-under-common__main">
    <h2 class="l-under-common__ttl"><span>メディアの方へ</span></h2>
    <p class="l-under-common__en">MEDIA</p>
  </div>
  <div class="l-under-common__bg"></div>
</div>

<div class="l-breadcrumb">
  <ul class="l-container">
    <?php bcn_display_list();?>
  </ul>
</div>

<main id="main" class="main p-media">

  <section class="p-media__section01" id="link01">
    <div class="l-container">
      <p class="p-media__section01__top">私たち、一般社団法人日本クレーンゲーム協会はアミューズメント業界の発展のため、<br class="u-pc">クレーンゲームの普及や人材育成に努めております。<br>協会では、新聞・雑誌・TV・ラジオなどの各種メディアからの取材を積極的にお受けしています。</p>
      <div class="l-fluorescence-border--midori">
        <div class="l-fluorescence-border__box">
          <div class="l-fluorescence-border__inner">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-media-img01.svg" alt="" class="p-media__section01__img01">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-media-img02.svg" alt="" class="p-media__section01__img02">
            <h3 class="p-media__section01__ttl">最新メディア取材履歴</h3>
            <div class="u-slider02">
              <?php
              $args = array(
                  'post_type' => 'media',
                  'posts_per_page' => -1, // 投稿件数の指定
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
                    <div class="u-slider02__img">'.$thumb_url.'</div>';
                  } else {
                  }
                  ?>
              <div class="u-slider02__box">
                <div class="u-slider02__inner">
                  <div class="u-pc">
                    <?php echo $thumb_output;?>
                  </div>
                  <div class="u-slider02__desc">
                    <time datetime="<?php the_time('c');?>" class="post-time"><?php echo get_the_date(); ?></time>
                    <h4 class="post-ttl"><?php echo get_the_title();?></h4>
                    <div class="u-sp">
                      <?php echo $thumb_output;?>
                    </div>
                    <p class="post-txt"><?php the_content();?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-media__section01-2">
    <div class="l-container">
      <h3 class="p-media__section01-2__ttl">過去の取材履歴</h3>
      <ul class="list-post-type01">
        <li class="list-item">
          <div class="post-data">
            <time>2019.08.28</time>
          </div>
          <p class="list-post-type01-txt">行田　プロの技　くれ達出演一般人も出演</p>
        </li>
      
        <li class="list-item">
          <div class="post-data">
            <time>2019.07.02</time>
          </div>
          <p class="list-post-type01-txt">穂積さん、クレーンゲーム協会の理事として出演。生放送で技披露</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2017.09.09</time>
          </div>
          <p class="list-post-type01-txt">火曜日、アイキャンの資格取得コーナーで、主にクレーンゲーム協会とくれ達検定の紹介される。行田店の紹介もリスナーからの情報で読まれる。（※未確認だが他にもＮＡＣＫ５で約30分位流れたとの事。　お菓子納品のトラック運転手さん談）</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2017.09.09</time>
          </div>
          <p class="list-post-type01-txt">訪日外国社向け、JAPANトラベルアプリ内で4ヵ国語で、クレーンゲームの漫画が公開される。エブリデイ行田とくれ達検定が紹介される</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2017.08.21</time>
          </div>
          <p class="list-post-type01-txt">敬老の日　『出張クレーンゲーム教室』の件が取り上げられる</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2017.07.20</time>
          </div>
          <p class="list-post-type01-txt">浅越ゴエさんのお助けコーナー。五十嵐プロとクレーンゲーム協会理事緑川が放送される。放送後送って頂いたＤＶＤ観られず、放送内容未確認。</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2017.04.24</time>
          </div>
          <p class="list-post-type01-txt">太田店　山本店長　プロ2号誕生　取り上げられる</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2017.04.20</time>
          </div>
          <p class="list-post-type01-txt">プリンス山本　クレーンゲームプロ2号　誕生が取り上げられる</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2017.04.19</time>
          </div>
          <p class="list-post-type01-txt">太田店　山本店長　プロ2号誕生　Yahooニュースで取り上げられる</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2017.04.03</time>
          </div>
          <p class="list-post-type01-txt">"さんまをゲストに迎え、所・たけしの3人が見たい映像を紹介。<br>その中で、所さんの日本の文化の映像でonly in JAPANの動画が２次利用されEV行田店とくれ達検定の模様が映る"</p>
        </li>
       <li class="list-item">
          <div class="post-data">
            <time>2016.05.18</time>
          </div>
          <p class="list-post-type01-txt">つるの剛士、平井理央、滝沢カレンが都内を歩くロケで、ゲームセンターに立ち寄った際に直也さんが3人に技を見せる。スタジオ騒然の超大技披露！35歳の誕生日だったために「Happy Birthday」とテロップで出される。</p>
        </li>

        <li class="list-item">
          <div class="post-data">
            <time>2016.05.09</time>
          </div>
          <p class="list-post-type01-txt">紙面とｗｅｂ上でくれ達検定子供の部が紹介される。約3分動画も配信された。</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2016.04.12</time>
          </div>
          <p class="list-post-type01-txt">お台場パレットタウンのゲームセンターにて直也さんとバナナマン、元AKB48の大島麻衣さんが共演してバランスキャッチャーで対決する。最も直也さんの出番が多く、約8分も放送された。</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2015.09.09</time>
          </div>
          <p class="list-post-type01-txt">クレーンゲーム協会が認定する「クレーンゲームプロ講師」誕生！<br>クレーンゲームプロ講師としてエブリデイ行田店で働く五十嵐直也店長と、日本クレーンゲーム協会理事中村秀夫を取材して頂きました。</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2015.06.14</time>
          </div>
          <p class="list-post-type01-txt">5月5日、クレーンゲーム検定こどもの部開催時に優勝したチャンピオンが、年間1200個もの景品を取る73歳のおばあちゃんとクレーンゲーム対決をしました!!</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2015.03.11</time>
          </div>
          <p class="list-post-type01-txt">クレーンゲーム認定資格を認定・発行する“日本クレーンゲーム協会”が発足！　4月より世界初の“くれ達検定”を実施</p>
        </li>
        <li class="list-item">
          <div class="post-data">
            <time>2015.03.11</time>
          </div>
          <p class="list-post-type01-txt">クレーンゲーム検定「くれたつ」が取り上げられました。</p>
        </li>
      </ul>

    </div>
  </section>

  <section class="p-media__section02" id="link02">
    <div class="l-container">
      <div class="u-tac">
        <h3 class="p-media__section01__ttl">海外を巻き込み、<br>クレーンゲームの人気が<br class="u-sp">再燃中！</h3>
      </div>
      <div class="p-media__section02__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/media_section02_img01.jpg" alt="">
      </div>
      <div class="p-media__section02__grid">
        <div class="p-media__section02__inner">
          <p>スマートフォンの普及、ネットゲームの普及により、アミューズメント業はここ数年、窮地に立たされてきました。<br>しかし、スマートフォンでも、インターネットゲームでも味わうことができないアナログな遊びとして、クレーンゲームが今、注目を集めています。<br><br>クレーンゲームは日本独自の発達を遂げた日本のアニメとの親和性も高く、日本人だけではなく、来日された外国の方にも人気があります。<br>※くれ達検定にも、外国の方が参加されています。</p>
          <ul class="p-media__section02__list">
            <li class="p-media__section02__item">
              <p>自分の腕の上達によって、<br>景品を取れる楽しさ</p>
            </li>
            <li class="p-media__section02__item">
              <p>クレーンゲーム限定の<br>景品を集める楽しさ</p>
            </li>
            <li class="p-media__section02__item">
              <p>好きなアニメの景品を<br>集める楽しさ</p>
            </li>
          </ul>
          <p>私たち日本クレーンゲーム協会は、日本から生まれたこの楽しさを日本だけでなく、世界に広げていきます。</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
