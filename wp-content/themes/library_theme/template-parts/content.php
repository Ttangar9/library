<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="book-container">
	<?php $category = get_the_category($post->ID);
$current_cat_id = $category[0]->cat_ID;
$current_cat_name = $category[0]->name;
?>
	<h1><?php echo $current_cat_name; ?></h1>
	<div class="book-cards">
		<?php if(have_posts()) :query_posts(array('cat' =>$current_cat_id)); ?>
		<?php while(have_posts()) :the_post(); ?>
		<div class="book-card">
			<?php the_post_thumbnail(); ?>
			<div class="book-info">
				<?php the_content(); ?>
				<a href="#">Добавить в карзину</a>
			</div>	
		</div>
	<?php endwhile;endif;wp_reset_query(); ?>
	</div>
</div>
</article>
