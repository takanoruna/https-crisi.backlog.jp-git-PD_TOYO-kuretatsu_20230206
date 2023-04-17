<?php
/**
 * Functions and Definitions
 *
 * @package WordPress
 * @subpackage kuretatsu
 * @since 1.0
 * @version 1.0
 */
 define('FACEBOOK_URL', '');
 define('TWITTER_URL', '');
////管理画面サイドメニューの不要な項目非表示
//add_action('admin_menu', function () {
//    global $menu;
//    //unset($menu[2]);  // ダッシュボード
//    //unset($menu[4]);  // メニューの線1
//    unset($menu[5]);  // 投稿
//    //unset($menu[10]); // メディア
//    //unset($menu[15]); // リンク
//    //unset($menu[20]); // ページ
//    //unset($menu[25]); // コメント
//    //unset($menu[59]); // メニューの線2
//    //unset($menu[60]); // テーマ
//    //unset($menu[65]); // プラグイン
//    //unset($menu[70]); // プロフィール
//    //unset($menu[75]); // ツール
//    //unset($menu[80]); // 設定
//    //unset($menu[90]); // メニューの線3
//});
//投稿タグ非表示
function hide_taxonomy_from_menu() {
    global $wp_taxonomies;
    // タグの非表示
    if ( !empty( $wp_taxonomies['post_tag']->object_type ) ) {
        foreach ( $wp_taxonomies['post_tag']->object_type as $i => $object_type ) {
            if ( $object_type == 'post' ) {
                unset( $wp_taxonomies['post_tag']->object_type[$i] );
            }
        }
    }
    return true;
}
add_action( 'init', 'hide_taxonomy_from_menu' );
/* 【管理画面】投稿編集画面で不要な項目を非表示にする */
function my_remove_meta_boxes() {
  remove_meta_box('tagsdiv-post_tag','post','normal' ); // タグ
}
add_action('admin_menu','my_remove_meta_boxes' );
/* 【管理画面】投稿編集画面で不要な項目を非表示にする */
function my_remove_post_support() {
  remove_post_type_support('post','thumbnail');       // アイキャッチ画像
}
add_action('init','my_remove_post_support');

//
//自動保存無効化
add_action('wp_print_scripts', function () {
    wp_deregister_script('autosave');
});

//ヘッダー整理
remove_action('wp_head', 'wp_generator');//WordPressのバージョン情報を削除
remove_action('wp_head', 'print_emoji_detection_script', 7);//絵文字用のjs削除(front)
remove_action('admin_print_scripts', 'print_emoji_detection_script');//絵文字用のjs削除(admin)
remove_action('wp_print_styles', 'print_emoji_styles');//絵文字用のcss削除(front)
remove_action('admin_print_styles', 'print_emoji_styles');//絵文字用のcss削除(admin)
remove_action('wp_head', 'wp_shortlink_wp_head');//短縮URL生成の削除
remove_action('wp_head', 'rsd_link');//外部ツールからの投稿許可を削除
remove_action('wp_head', 'wlwmanifest_link');//Windows Live Writer からの投稿許可を削除
add_filter('emoji_svg_url', '__return_false');//DNSプリフェッチ設定の削除
//add_theme_support('title-tag');//<title>タグ設定


/**
 * 不要ページ対策
 */
//作成者ページのID見せない対策
add_filter('parse_query', function ($query) {
    if (!is_admin() && is_author()) {
        $query->set_404();
        status_header(404);
        nocache_headers();
    }
});

//タグ、検索ページ、作成者ページ、添付ファイルページを無効化
add_action('template_redirect', function () {
    //if (is_archive() || is_single() || is_search() || is_author() || is_attachment()) {
    if (is_tag() || is_search() || is_author() || is_attachment()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
    }
});

//記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');



//カスタム投稿タイプ
add_action('init', function () {
    register_post_type('activity',
        [
            'label' => 'クレーンゲーム協会の活動',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => [
                'slug'=> 'activity',
                'with_front' => false
            ],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                //'custom-fields',
                //'excerpt',
                //'author',
                //'trackbacks',
                //'comments',
                //'revisions',
                //'page-attributes'
            ]
        ]
    );

});

//カスタム投稿タイプ
add_action('init', function () {
    register_post_type('media',
        [
            'label' => 'メディアの方へ',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => [
                'slug'=> 'media',
                'with_front' => false
            ],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                //'custom-fields',
                //'excerpt',
                //'author',
                //'trackbacks',
                //'comments',
                //'revisions',
                //'page-attributes'
            ]
        ]
    );

});

//カスタム投稿タイプ
add_action('init', function () {
    register_post_type('second-grade',
        [
            'label' => '2級',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => [
                'slug'=> 'second-grade',
                'with_front' => false
            ],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => [
                'title',
                //'editor',
                //'thumbnail',
                //'custom-fields',
                //'excerpt',
                //'author',
                //'trackbacks',
                //'comments',
                //'revisions',
                //'page-attributes'
            ]
        ]
    );

});

//カスタム投稿タイプ
add_action('init', function () {
    register_post_type('third-grade',
        [
            'label' => '3級',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => [
                'slug'=> 'third-grade',
                'with_front' => false
            ],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => [
                'title',
                //'editor',
                //'thumbnail',
                //'custom-fields',
                //'excerpt',
                //'author',
                //'trackbacks',
                //'comments',
                //'revisions',
                //'page-attributes'
            ]
        ]
    );

});

// //製作実績カテゴリ
// register_taxonomy(
//     'activity_business',
//     'activity',
//     [
//         'hierarchical' => true,
//         'update_count_callback' => '_update_post_term_count',
//         'label' => '製作実績事業',
//         'public' => true,
//         'show_ui' => true,
//         'show_in_rest' => true,
//     ]
// );
//
// //製作実績カテゴリ
// register_taxonomy(
//     'activity_category',
//     'activity',
//     [
//         'hierarchical' => true,
//         'update_count_callback' => '_update_post_term_count',
//         'label' => '製作実績カテゴリー',
//         'public' => true,
//         'show_ui' => true,
//         'show_in_rest' => true,
//     ]
// );
//
// //製作実績タグ
// register_taxonomy(
//     'activity_tag',
//     'activity',
//     [
//         'hierarchical' => true,
//         'update_count_callback' => '_update_post_term_count',
//         'label' => '製作実績タグ',
//         'public' => true,
//         'show_ui' => true,
//         'show_in_rest' => true,
//     ]
// );

add_filter('post_type_link', function ($link, $post) {
    if ($post->post_type === 'activity') {
        return home_url('/activity/' . $post->ID);
    } elseif ($post->post_type === 'media') {
        return home_url('/media/' . $post->ID);
    } elseif ($post->post_type === 'second-grade') {
        return home_url('/second-grade/' . $post->ID);
    } elseif ($post->post_type === 'third-grade') {
        return home_url('/third-grade/' . $post->ID);
    } else {
        return $link;
    }
}, 1, 2);
//
add_filter('rewrite_rules_array', function ($rules) {
    $new_rules = [
        'activity/([0-9]+)/?$' => 'index.php?post_type=activity&p=$matches[1]',
        'media/([0-9]+)/?$' => 'index.php?post_type=media&p=$matches[1]',
        'second-grade/([0-9]+)/?$' => 'index.php?post_type=second-grade&p=$matches[1]',
        'third-grade/([0-9]+)/?$' => 'index.php?post_type=third-grade&p=$matches[1]',
    ];
    return $new_rules + $rules;
});

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );
//アイキャッチ画像の設定がない時の表示
function thumb_url( $size ) {
  if( has_post_thumbnail() ) {
    //サムネイルがある場合
    $postthumb =wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
    $url = $postthumb[0];
  } else {
    //サムネイルがない場合
    $url = get_template_directory_uri() . '/images/ir_content_def.jpg';
  }
  return $url;
}



//
function getRootTaxonomies($terms = null) {
    $tmp = [];
    if (isset($terms)) {
        foreach ($terms as $val) {
            if ($val->parent === 0) {
                $val->children = [];
                $tmp[] = $val;
            }
        }
        foreach ($tmp as $key=>$val) {
            foreach ($terms as $val2) {
                if ($val->term_id === $val2->parent) {
                    $tmp[$key]->children[] = $val2;
                }
            }
        }
    }
    return $tmp;
}

// フィルタの登録
add_filter('content_save_pre','test_save_pre');

function test_save_pre($content){
	global $allowedposttags;

	// iframeとiframeで使える属性を指定する
	$allowedposttags['iframe'] = array('class' => array () , 'src'=>array() , 'width'=>array(),
	'height'=>array() , 'frameborder' => array() , 'scrolling'=>array(),'marginheight'=>array(),
	'marginwidth'=>array());

	return $content;
}

add_shortcode('myphp', 'Include_my_php');
//保持されたURL構造をリセットして新たにカスタム投稿タイプページを追加できるようにする
global $wp_rewrite;
$wp_rewrite->flush_rules();

//固定ページ画像呼び出し
function replaceImagePath($arg) {
	$content = str_replace('"assets/images/', '"' . get_bloginfo('template_directory') . '/assets/images/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');
//固定ページpdf呼び出し
function pdf_replace_filter($content){
$content = str_replace('"pdf/', '"' . get_bloginfo('template_directory') . '/pdf/', $content);
return $content;
}
add_filter('the_content','pdf_replace_filter');


//ビジュアルエディタ非表示
// add_filter( 'user_can_richedit' , '__return_false' );

//固定ページではビジュアルエディタを利用できないようにする
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'page' ){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );

// windows chrome で見えるL SEPを表示時に削除する
function usort_edit_lsep_contents($contents){
    return hex2bin(str_replace("e280a8","",bin2hex($contents)));
}
add_filter('the_content', 'usort_edit_lsep_contents');


// 任意のテキストの抜粋を行う
function get_my_excerpt($text, $length = 200){
  if ( $length > 0 ) {
    $text = str_replace(array("\r\n", "\r", "\n", "  "), "", $text);
    $text = str_replace(array("\""), "", $text);
    $text = trim(strip_tags($text));
    $ellipsis = '...';

	return wp_html_excerpt($text, $length,$ellipsis);
  } else {
    return $text;
  }
}

// 投稿ページのショートコードで指定された PHP ファイルを読み込む関数
function sc_php($atts = array()) {
  shortcode_atts(array(   /* shortcode_atts でショートコードの属性名を指定 */
    'file' => 'default'   /* 属性名とデフォルトの値 */
  ), $atts);   /* 属性を格納する変数 */
  ob_start();   /* バッファリング */
  include(STYLESHEETPATH . "/$atts[file].php");  /* CSSのあるパス = 子テーマのパスを指定 */
  return ob_get_clean();  /* バッファの内容取得、出力バッファを削除 */
}
// ショートコード作成（sc というショートコードは、sc_php()という関数を呼び出すという意味）
add_shortcode('sc', 'sc_php');


//----------------------------------------------
// 出力件数設定
//----------------------------------------------

// function twpp_change_posts_per_page( $query ) {
//   if ( is_admin() || ! $query->is_main_query() ) {
//     return;
//   }
//   if ( $query->is_category( array(18)) ) {
//     $query->set( 'posts_per_page', 12 );
//   }
// }
// add_action( 'pre_get_posts', 'twpp_change_posts_per_page');


// ファイルディレクトリ
$theme_inc_dir = dirname(__FILE__).'/inc/';
// 記事内やテンプレート内でURLを返す関数
$get_url_short_code_file_name = $theme_inc_dir.'get_url_short_code.php';
if ( is_file( $get_url_short_code_file_name ) ) {
  require_once($get_url_short_code_file_name);
}
// ページング
$cms_pagination_file_name = $theme_inc_dir.'cms_pagination.php';
if ( is_file( $cms_pagination_file_name ) ) {
  require_once($cms_pagination_file_name);
}
// タクソノミーの出力
$disp_taxonomy_list_file_name = $theme_inc_dir.'disp_taxonomy_list.php';
if ( is_file( $disp_taxonomy_list_file_name ) ) {
  require_once($disp_taxonomy_list_file_name);
}

// 画像サイズ設定
$baw_theme_setup_file_name = $theme_inc_dir.'thumb_setup.php';
if ( is_file( $baw_theme_setup_file_name ) ) {
  require_once($baw_theme_setup_file_name);
}
//----------------------------------------------
// get_post_typeの拡張ラッパー
//----------------------------------------------
function get_my_post_type(){
	if(is_tax()){
		$taxonomy = get_query_var( 'taxonomy' );
		$post_type = get_taxonomy( $taxonomy )->object_type[0];
		return $post_type;
	}
	if(is_category()){
		return 'post';
	}
	if(is_archive()){
		$post_type = get_query_var( 'post_type' );
		return $post_type;
	}
	$post_type = get_post_type();
	if($post_type){
		return $post_type;
	}
	return false;
}

//住所
wp_enqueue_script('yubinbango','https://yubinbango.github.io/yubinbango/yubinbango.js',array(),false,true );

function add_yubinbango_class(){
  echo <<<EOC
<script>
  jQuery('.mw_wp_form form').addClass('h-adr');
</script>
EOC;
}
add_action( 'wp_print_footer_scripts', 'add_yubinbango_class' );
