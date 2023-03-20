<?php get_header(); ?>

<main>
<div class="title-area">
<img src="<?php echo esc_url(get_theme_file_uri('/img/pagetitle_blog.jpg')); ?>" alt="ページタイトル" width="1400" height="200" class="title-img">  
<h2 class="title-txt">BLOG</h2>
</div>
<div class="wrapper">
      <ul class="cat-nav">
        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">すべての記事</a></li>
        <li <?php if(is_category('news')) : ?>class="nav_current"<?php endif; ?>><a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a></li>
        <li <?php if(is_category('staff')) : ?>class="nav_current"<?php endif; ?>><a href="<?php echo esc_url(home_url('/staff/')); ?>">スタッフ通信</a></li>
        <li <?php if(is_category('event')) : ?>class="nav_current"<?php endif; ?>><a href="<?php echo esc_url(home_url('/event/')); ?>">イベント</a></li>
      </ul>

<div class="cat-content all">
<ul>
<?php
// 取得したい内容を配列に記載します（不要箇所は省略可）
$args = array(
      'post_type' => 'post', //投稿を表示します
	'posts_per_page'   => 5, // 読み込みしたい記事数（全件取得時は-1）
      'paged' => get_query_var('paged') // 今何ページ目かを取得
);
// 配列で指定した内容で、記事情報を取得
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):
while ( $the_query->have_posts() ):$the_query->the_post(); 
?>
<li>
        <a href="<?php the_permalink(); ?>">
        <div class="data-area">
        <time class="data"><?php echo get_the_date(); ?></time>
        <span class="category"><?php
  $category = get_the_category(); 
  echo $category[0]->cat_name;
  ?></span>
        </div>
        <h2><?php the_title(); ?></h2>
        </a>
</li>
<?php endwhile; else: ?>
<li><p>記事がありません。</p></li>
<?php endif; wp_reset_postdata(); ?>
</ul>
<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
</div>
<div class="cat-content news <?php if(is_category('news')) : ?>con_current<?php endif; ?>">
<ul>
<?php
$args = array(
      'post_type' => 'post', //投稿を表示します
	'posts_per_page'   => 1, // 読み込みしたい記事数（全件取得時は-1）
	'category_name' => 'NEWS', // 読み込みしたいカテゴリ名
      'paged' => get_query_var('paged') // 今何ページ目かを取得
);
// 配列で指定した内容で、記事情報を取得
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):
while ( $the_query->have_posts() ):$the_query->the_post(); 
?>
<li>
        <a href="<?php the_permalink(); ?>">
        <div class="data-area">
        <time class="data"><?php echo get_the_date(); ?></time>
        <span class="category"><?php
  $category = get_the_category(); 
  echo $category[0]->cat_name;
  ?></span>
        </div>
        <h2><?php the_title(); ?></h2>
        </a>
</li>
<?php endwhile; else: ?>
<li><p>記事がありません。</p></li>
<?php endif; wp_reset_postdata(); ?>
</ul>
<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
</div>

<div class="cat-content staff <?php if(is_category('staff')) : ?>con_current<?php endif; ?>">
<ul>
<?php
$args = array(
      'post_type' => 'post', //投稿を表示します
	'posts_per_page'   => 5, // 読み込みしたい記事数（全件取得時は-1）
	'category_name' => 'STAFF', // 読み込みしたいカテゴリ名
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):
while ( $the_query->have_posts() ):$the_query->the_post(); 
?>
<li>
        <a href="<?php the_permalink(); ?>">
        <div class="data-area">
        <time class="data"><?php echo get_the_date(); ?></time>
        <span class="category"><?php
  $category = get_the_category(); 
  echo $category[0]->cat_name;
  ?></span>
        </div>
        <h2><?php the_title(); ?></h2>
        </a>
</li>
<?php endwhile; else: ?>
<li><p>記事がありません。</p></li>
<?php endif; wp_reset_postdata(); ?>
</ul> 
</div>
<div class="cat-content event <?php if(is_category('event')) : ?>con_current<?php endif; ?>">
<ul>
<?php
$args = array(
      'post_type' => 'post', //投稿を表示します
	'posts_per_page'   => 5, // 読み込みしたい記事数（全件取得時は-1）
	'category_name' => 'EVENT', // 読み込みしたいカテゴリ名
);
// 配列で指定した内容で、記事情報を取得
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):
while ( $the_query->have_posts() ):
$the_query->the_post(); 
?>
<li>
        <a href="<?php the_permalink(); ?>">
        <div class="data-area">
        <time class="data"><?php echo get_the_date(); ?></time>
        <span class="category"><?php
  $category = get_the_category(); 
  echo $category[0]->cat_name;
  ?></span>
        </div>
        <h2><?php the_title(); ?></h2>
        </a>
</li>
<?php endwhile; else: ?>
<li><p>記事がありません。</p></li>
<?php endif; wp_reset_postdata(); ?>
</ul>
</div>

</div>
</main>

<?php get_footer(); ?>