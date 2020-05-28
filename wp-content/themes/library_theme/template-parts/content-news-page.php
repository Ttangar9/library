<?php
/**
 * The template for displaying all pages
 *
 * This is the template that display news page by default.
 * Please note that this is the WordPress construct of news page
 * and that other 'page' on your WordPress site may use a
 * different template.
 *
 *
 * @package init
 */?>
<div class="news-block">
	<?php $cat_news_id = get_cat_ID('Новости'); ?>
	<?php if(have_posts()) :query_posts(array('cat' => $cat_news_id)); ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="news-post-card">
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; wp_reset_query();?>
</div>
<?php get_footer();?>