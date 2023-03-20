<?php
/*
Template Name: フロントページ
*/
?>
<?php get_header(); ?>

    <main>
      <ul id="mainvisual" class="slider">
        <li class="item"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual1.jpg')); ?>" alt="" height="" width=""></li>
        <li class="item"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual2.jpg')); ?>" alt="" height="" width=""></li>
        <li class="item"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual3.jpg')); ?>" alt="" height="" width=""></li>
        <li class="item"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual4.jpg')); ?>" alt="" height="" width=""></li>
        <li class="item"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual5.jpg')); ?>" alt="" height="" width=""></li>
      </ul>

      <section id="blog" class="wrapper">
        <h2 class="section-title">
          <span class="en">BLOG</span>
          <span class="ja">ブログ</span>
        </h2>
<ul class="list">
<?php
// 取得したい内容を配列に記載します（不要箇所は省略可）
$args = array(
  'post_type' => 'post', //投稿を表示します
	'posts_per_page'   => 3, // 読み込みしたい記事数（全件取得時は-1）
);
// 配列で指定した内容で、記事情報を取得
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):
while ( $the_query->have_posts() ):
$the_query->the_post(); 
?>
<li>
  <a href="<?php the_permalink(); ?>">
  <div class="date-area">
  <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
  <span><?php
  $category = get_the_category(); 
  echo $category[0]->cat_name;
  ?></span>
  </div>
  <p><?php the_title(); ?></p>
  </a>
</li>
<?php endwhile; else: ?>
<li><p>記事がありません。</p></li>
<?php endif; wp_reset_postdata(); ?>
</ul>
      </section>

      <section id="about">
        <div class="img">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/about.jpg')); ?>" alt="">
        </div>

        <div class="text">
          <h2 class="section-title">
            <span class="en">ABOUT</span>
            <span class="ja">私たちについて</span>
          </h2>
          <p>
            テキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキスト
          </p>
          <p>
            テキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキスト
          </p>
          <p>
            テキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキスト
          </p>
          <button class="btn_white" onclick="location.href='<?php echo esc_url(home_url('/about/')); ?>'" >くわしくはこちら</button>
          <button class="btn_white show_pop">会社紹介ムービーはこちら</button>
          <div class="show_popcontent">
           <div class="content">
           <iframe id="video-iframe" width="560" height="315" src="https://www.youtube.com/embed/W_OK4TLbvYs?enablejsapi=1&amp;" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
           <button id="close">閉じる</button>
          </div>
          </div>
        </div>
      </section>

      <section id="business" class="wrapper">
        <h2 class="section-title">
          <span class="en">BUSINESS</span>
          <span class="ja">事業内容</span>
        </h2>

        <div class="flex">
          <div class="left">
            <div class="item">
              <p class="title">Web制作・マーケティング</p>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/business1.jpg')); ?>" alt="">
            </div>
            <div class="item">
              <p class="title">インターネットメディア事業</p>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/business2.jpg')); ?>" alt="">
            </div>
          </div>

          <div class="right">
            <div class="item">
              <p class="title">プロモーション企画・制作</p>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/business3.jpg')); ?>" alt="">
            </div>
            <div class="item">
              <p class="title">ソーシャル企画・運営</p>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/business4.jpg')); ?>" alt="">
            </div>
          </div>
        </div>
      </section>

      <section id="company" class="wrapper">
        <div class="text">
          <h2 class="section-title">
            <span class="en">COMPANY</span>
            <span class="ja">会社情報</span>
          </h2>

          <dl class="info">
            <dt>会社名</dt>
            <dd>ウェブエンターテイメントデザイン株式会社</dd>
            <dt>所在地</dt>
            <dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
            <dt>代表</dt>
            <dd>ＸＸＸＸＸＸ</dd>
            <dt>設立</dt>
            <dd>2021年1月1日</dd>
            <dt>資本金</dt>
            <dd>3,000,000円</dd>
            <dt>事業内容</dt>
            <dd>Web制作・マーケティング</dd>
            <dd class="add">インターネットメディア事業</dd>
            <dd class="add">プロモーション企画・制作</dd>
            <dd class="add">ソーシャル企画・運営</dd>
          </dl>
        </div>

        <div class="img">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/company.jpg')); ?>" alt="">
        </div>
      </section>
    </main>

<?php get_footer(); ?>