<?php get_header(); ?>

<main>

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="title-area">
<?php the_post_thumbnail( 'full', ['class' => 'title-img'] ); ?>
<h2 class="title-txt"><?php the_title(); ?></h2>
</div>
<div class="wrapper">
<?php the_content(); ?>
</div>
<?php endwhile;else: ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>