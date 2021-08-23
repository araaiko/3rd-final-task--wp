<?php
// テーマのセットアップ
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
?>

<?php
// CSS, js, AdobeFont, wow.js 読み込み
function my_script_init()
{
wp_enqueue_style('adobeFont', 'https://use.typekit.net/bau6hsk.css', array(), 'all');
wp_enqueue_style('wowCss', get_template_directory_uri() . '/css/libs/animate.css', array(), 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('wowJs', get_template_directory_uri() . '/js/wow.min.js', array(), true);
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

?>