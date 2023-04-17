<?php
/**
 * クレーンゲーム協会の活動
 *
 * @package WordPress
 * @subpackage kuretatsu
 * @since 1.0
 * @version 1.0
 *
 * Template Name: くれ達検定 3級
 * Template Post Type: third-grade
 */
?>
<?php
session_start();
if (!isset($SESSION_['formdata'])) {
    $SESSION_['formdata'] = 0;
} else {
    $SESSION_['formdata']++;
}
?>
<?php get_header(); ?>
<div class="l-under-common p-third-grade">
  <div class="l-under-common__part"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/top-part-second-grade.png" alt=""></div>
  <div class="l-under-common__main">
    <h2 class="l-under-common__ttl"><span>くれ達検定 3級</span></h2>
    <p class="l-under-common__en">KURETATSU</p>
  </div>
  <div class="l-under-common__bg"></div>
</div>

<div class="l-breadcrumb">
  <ul class="l-container">
    <?php bcn_display_list();?>
  </ul>
</div>

<main id="main" class="main p-third-grade p-grade">

  <section class="p-third-grade__section01" id="link01">
    <div class="l-container">
      <h3 class="l-light-ttl"><span>試験内容</span></h3>
      <p class="p-grade__top-txt">まずは3級から！受験資格、準備不要。誰でも挑戦できます。<br>「クレーンゲーム攻略講座」と「実技試験」の二部構成！</p>

      <ul class="l-fluorescence-border__grid--col2">
        <li class="l-fluorescence-border__item">
          <div class="l-fluorescence-border__box">
            <h4 class="l-fluorescence-border__grid--col2__ttl">攻略講座</h4>
            <div class="l-fluorescence-border__inner">
              <div class="l-fluorescence-border__grid--col2__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-img01.jpg" alt="">
              </div>
              <p class="l-fluorescence-border__grid--col2__subttl">12の基本技のレクチャー</p>
              <p class="l-fluorescence-border__grid--col2__txt">くれ達講師が12の基本的な取り方テクニックを実際に台を操作しながら、狙うポイントやそのテクニックの考え方などを分かりやすくレクチャーさせて頂きます。</p>
            </div>
          </div>
        </li>
        <li class="l-fluorescence-border__item">
          <div class="l-fluorescence-border__box">
            <h4 class="l-fluorescence-border__grid--col2__ttl">実技試験</h4>
            <div class="l-fluorescence-border__inner">
              <div class="l-fluorescence-border__grid--col2__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-img02.jpg" alt="">
              </div>
              <p class="l-fluorescence-border__grid--col2__subttl">12の基本技の実技テスト</p>
              <p class="l-fluorescence-border__grid--col2__txt">講師による12個のテクニックの説明が終わった後、30分間の中で、受験者の皆様に、実際に12のテクニックを実践して頂き、12個中8個クリア（＝テクニックの体得）出来れば、3級合格という検定になっております。</p>
            </div>
          </div>
        </li>
      </ul>

      <div class="p-third-grade__video">
        <div class="p-top__content__video">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-video01.svg" alt="" class="p-top__content__video-ttl">
          <div  class="p-top__content__video-main">
            <a href="" class="js-modal-open" data-target="modal01">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/top/top-content-video02.png" alt="">
            </a>
          </div>
        </div>
      </div>

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

      <ul class="l-fluorescence-border__grid">
        <li class="l-fluorescence-border__item">
          <div class="l-fluorescence-border__box">
            <div class="l-fluorescence-border__inner p-grade__price">
              <h3 class="l-light-ttl"><span>検定料</span></h3>
              <div class="p-grade__price-top">
                <p class="p-grade__price-top__right">3級・・・</p>
                <p class="p-grade__price-top__left">5,000円</p>
              </div>
              <div class="p-grade__price__box">
                <p class="p-grade__price__box-ttl">お振込口座</p>
                <ul class="p-grade__price__box__list">
                  <li class="p-grade__price__box__item">
                    <p class="p-grade__price__box__ttl">金融機関名</p>
                    <p class="p-grade__price__box__txt">ゆうちょ銀行</p>
                  </li>
                  <li class="p-grade__price__box__item">
                    <p class="p-grade__price__box__ttl">支店名</p>
                    <p class="p-grade__price__box__txt">〇三八（ゼロサンハチ）店（店番038）</p>
                  </li>
                  <li class="p-grade__price__box__item">
                    <p class="p-grade__price__box__ttl">口座番号</p>
                    <p class="p-grade__price__box__txt">普通0529044</p>
                  </li>
                  <li class="p-grade__price__box__item">
                    <p class="p-grade__price__box__ttl">口座名義</p>
                    <p class="p-grade__price__box__txt">シャ）ニホンクレーンゲームキョウカイ<br><span class="p-grade__price__box__min">（一般社団法人　日本クレーンゲーム協会）</span></p>
                  </li>
                  <li class="p-grade__price__box__item">
                    <p class="p-grade__price__box__ttl">振込期日</p>
                    <p class="p-grade__price__box__txt">申込日より10日以内</p>
                  </li>
                </ul>
              </div>
              <p class="p-grade__price__min">※必ず申込時と同じ名義でお振込ください。<br>また、名義人の前に「受験日の日にち」をご入力ください。<br>申込者名義と違う名義および受験日の日にちの表記がない場合、入金の確認ができません。<br>例）2月28日に受験の場合は名義人の前に「0228」を入力してください。<br>※振込手数料はご負担ください。<br>※キャンセルされる場合、ご返金にかかる手数料を差し引かせていただき、ご返金いたします。</p>
            </div>
          </div>
        </li>
        <li class="l-fluorescence-border__item">
          <div class="l-fluorescence-border__box">
            <div class="l-fluorescence-border__inner">
              <h3 class="l-light-ttl"><span>日程</span></h3>
              <div class="l-table-scroll">
                <div class="p-grade__table-grid">
                  <table class="p-grade__table">
                    <tr>
                      <th>検定(イベント)名</th>
                      <th>開催日</th>
                      <th>時間</th>
                      <th>定員</th>
                      <th>会場</th>
                    </tr>
                    <?php
                    $args = array(
                        'post_type' => 'third-grade',
                        'posts_per_page' => -1, // 投稿件数の指定
                        'paged' => get_query_var('paged'),
                    );
                    $posts = get_posts( $args );
                    foreach ( $posts as $post ): // ループの開始
                        setup_postdata( $post ); // 記事データの取得
                        $post_content = apply_filters('the_content', strip_shortcodes($post->post_content));
                        $date = get_field('日程');
                        ?>
                        <tr>
                          <td><?php echo $date['検定名']; ?></td>
                          <td><?php echo $date['開催日']; ?></td>
                          <td><?php echo $date['時間']; ?></td>
                          <td><?php echo $date['定員']; ?></td>
                          <td>
                          <?php
                      			// フィールド名areaを取得
                      			$area = get_field('area');
                      			// ラジオボタンフィールドの値を取得
                      			$areaValue = $area['value'];
                      			// ラジオボタンフィールドのラベルを取得
                      			$areaLabel = $area['label'];
                      			?>
                      			<?php if($areaValue === 'tokyo'): ?>
                      		  <a href="https://everyday-cranegame-world.com/accsess/" target="_blank">エブリデイとってき屋<br>東京本店</a>
                      		<?php elseif($areaValue === 'gyoda'): ?>
                      		  <a href="https://ufo-everyday.com/gyoda_store/" target="_blank">エブリデイとってき屋<br>行田店</a>
                      		<?php else: ?>
                      		<?php endif; ?>
                          </td>
                        </tr>

                  <?php endforeach; ?>
                  <?php wp_reset_postdata(); ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-third-grade__section02" id="link02">
    <div class="l-container">
      <h3 class="l-light-ttl"><span>検定受験申し込みの流れ</span></h3>
      <ul class="p-grade__flow">
        <li class="p-grade__flow-item">
          <div class="p-grade__flow-box">
            <div class="p-grade__flow-inner">
              <div class="p-grade__flow__col2">
                <div class="p-grade__flow__col2-img u-pc">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-flow01.jpg" alt="">
                </div>
                <div class="p-grade__flow__col2-desc">
                  <h4 class="p-grade__flow__ttl">
                    <span class="p-grade__flow__ttl-num">1</span>
                    <span class="p-grade__flow__ttl-txt">フォームよりお申し込みください</span>
                  </h4>
                  <div class="p-grade__flow__col2-img u-sp">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-flow01.jpg" alt="">
                  </div>
                  <div class="p-grade__flow__col2-txt">
                    <p>日程を確認し、開催日と受験されたい検定の種類を明記の上、本ページ下部のフォームよりお申し込みください。3級検定は誰でも受験可能です。アミューズメント店スタッフやリーダー向けの1級検定受験には、2級の取得が必要です。</p>
                    <!--<a href="#" class="u-btn">お申し込みはこちら</a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="p-grade__flow-item">
          <div class="p-grade__flow-box">
            <div class="p-grade__flow-inner">
              <div class="p-grade__flow__col2">
                <div class="p-grade__flow__col2-img u-pc">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-flow02.jpg" alt="">
                </div>
                <div class="p-grade__flow__col2-desc">
                  <h4 class="p-grade__flow__ttl">
                    <span class="p-grade__flow__ttl-num">2</span>
                    <span class="p-grade__flow__ttl-txt">検定料をお振込み</span>
                  </h4>
                  <div class="p-grade__flow__col2-img u-sp">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-flow02.jpg" alt="">
                  </div>
                  <div class="p-grade__flow__col2-txt">
                    <p>お申し込みの検定に合わせて、検定料をお振込みください。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="p-grade__flow-item">
          <div class="p-grade__flow-box">
            <div class="p-grade__flow-inner">
              <h4 class="p-grade__flow__ttl">
                <span class="p-grade__flow__ttl-num">3</span>
                <span class="p-grade__flow__ttl-txt">当日に会場へお越しください</span>
              </h4>
              <ul class="p-grade__flow__harf">
                <li class="p-grade__flow__harf-item">
                  <p class="p-grade__flow__harf-ttl">エブリデイ行田店</p>
                  <div class="p-grade__flow__harf-col2">
                    <div class="p-grade__flow__harf-desc">
                      住所：埼玉県行田市下忍644-1<br>Tel：<a href="tel:0485988649">048ｰ598ｰ8649</a>
                    </div>
                    <div class="p-grade__flow__harf-img">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-flow03.jpg" alt="">
                    </div>
                  </div>
                  <div class="p-grade__flow__harf-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3222.818804392834!2d139.4604944509778!3d36.12227191316666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f2c68b97354af%3A0xe5a80a6ccf4463c9!2z44CSMzYxLTAwMzcg5Z-8546J55yM6KGM55Sw5biC5LiL5b-N77yW77yU77yU4oiS77yR!5e0!3m2!1sja!2sjp!4v1674031248011!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </li>
                <li class="p-grade__flow__harf-item">
                  <p class="p-grade__flow__harf-ttl">エブリデイとってき屋 <br class="u-sp">東京本店</p>
                  <div class="p-grade__flow__harf-col2">
                    <div class="p-grade__flow__harf-desc">
                      住所：埼玉県八潮市上馬場460-1<br>Tel：<a href="tel:0489995343">048ｰ999ｰ5343</a>
                    </div>
                    <div class="p-grade__flow__harf-img">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/under/second-grade-flow04.jpg" alt="">
                    </div>
                  </div>
                  <div class="p-grade__flow__harf-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.1312631781257!2d139.82232621543585!3d35.82125502988684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601891a458991f37%3A0x22bd6f8956ed3dfb!2z44Ko44OW44Oq44OH44Kk44Go44Gj44Gm44GN5bGLIOadseS6rOacrOW6lw!5e0!3m2!1sja!2sjp!4v1677552304365!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-third-grade__section03" id="link03">
    <div class="l-container">
      <h3 class="l-light-ttl"><span>検定申し込み</span></h3>
      <?php echo do_shortcode('[mwform_formkey key="90"]'); ?>
    </div>
  </section>


</main>

<?php get_footer();
