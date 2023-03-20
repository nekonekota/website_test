<?php get_header(); ?>
<main>

<div class="title-area">
<img src="<?php echo esc_url(get_theme_file_uri('/img/pagetitle_blog.jpg')); ?>" alt="ページタイトル" width="1400" height="200" class="title-img">  
<h2 class="title-txt">BLOG</h2>
</div>

<div class="wrapper">
<article>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<h2 class="blog-title"><?php the_title(); ?></h2>
<div class="data-area">
<time class="data"><?php the_date(); ?></time>
<span class="category">
  <?php
  $category = get_the_category(); 
  echo $category[0]->cat_name;
  ?>
</span>
</div>
<div class="ditil-area">
<?php the_content(); ?>
</div>
<?php endwhile;else: ?>
<?php endif; ?>
</article>
<div class="flex">
	<?php if (get_previous_post()):?>
	<div class="btn_white"><?php previous_post_link('%link', '前の記事へ'); ?></div>
	<?php endif; ?>

	<?php if (get_next_post()):?>
	<div class="btn_white"><?php next_post_link('%link', '次の記事へ'); ?></div>
	<?php endif; ?>
</div>
</div>

</main>
<?php get_footer(); ?>