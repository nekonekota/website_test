<?php

// CSSファイルの読み込み
function my_style() {
  wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), 'all');
  wp_enqueue_style('style', get_stylesheet_uri('style.css'), array('ress'), 'all'); //テーマの直下のstyle.css
  wp_enqueue_style('main', get_theme_file_uri('css/_main.css'), array('ress'), 'all'); 
  wp_enqueue_style('slick)', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array('ress'), 'all'); //CDNの場合  wp_enqueue_style('page', get_theme_file_uri('css/_page.css'), array('ress'), 'all');
  wp_enqueue_style('page', get_theme_file_uri('css/_page.css'), array('ress'), 'all'); 
  wp_enqueue_style('sp', get_theme_file_uri('css/_sp.css'), array('ress'), 'all'); 
  }
  add_action('wp_enqueue_scripts', 'my_style');

// JSファイルの読み込み
function my_script() {

  wp_deregister_script('jquery'); //デフォルトのjQueryを削除
  wp_enqueue_script('jquery',get_theme_file_uri('js/jquery.min.js'), array(), false, true); //CDNの場合
  wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true); //テーマファイルの場合
  wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), false, true); //テーマファイルの場合
  }
  add_action('wp_enqueue_scripts', 'my_script');

  // アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

function my_body_class($classes) {
  if( !is_front_page() ){   //もしフロントページ以外なら
    $classes[] = 'article';   //クラス名articleを出力
    $page = get_post();  //ページの情報をゲット
    $classes[] = $page->post_name; //ページのタイトルを出力
    }
  if( is_single() || is_category() ){  
    $classes[] = 'blog ditil';   //クラス名blogを出力
    }
  return $classes;  //処理の終了
  }
  add_filter('body_class', 'my_body_class');
  
  ?>
