<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Web Entertainment Design</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('/img/favicon.ico')); ?>">
<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
      <header id="header">
      <div class="inner wrapper">
        <h1 class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo.svg')); ?>" alt="Web Entertainment Design"></a>
        </h1>
        <nav class="pc-nav">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/./about/')); ?>">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url('#business/')); ?>">BUSINESS</a></li>
            <li><a href="<?php echo esc_url(home_url('#company/')); ?>">COMPANY</a></li>
            <li><a href="<?php echo esc_url(home_url('/./blog/')); ?>">BLOG</a></li>
          </ul>
        </nav>
      </div>
      <a class="contact" href="./contact">お問い合わせ</a>
        <nav class="sp-nav">
          <button class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <ul class="menu">
            <li><a href="<?php echo esc_url(home_url('/./about/')); ?>">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url('#business/')); ?>">BUSINESS</a></li>
            <li><a href="<?php echo esc_url(home_url('#company/')); ?>#company">COMPANY</a></li>
            <li><a href="<?php echo esc_url(home_url('/./blog/')); ?>">BLOG</a></li>
            <li><a href="<?php echo esc_url(home_url('/./contact/')); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
    </header>