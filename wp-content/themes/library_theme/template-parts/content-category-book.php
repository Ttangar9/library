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
 <div class="category-container">
	<?php $category_book_id = get_cat_ID('Жанры'); ?>
 	<h1><?php echo get_cat_name($category_book_id); ?></h1>
 	<div class="genre-cards">
 		
 	<?php $arg = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => $category_book_id,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => false,
	'title_li'           => '',
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
);?>
<?php wp_list_categories( $arg ); ?>

 	</div>

 </div>
 <div class="book-container">
	<?php $cat_book_id = get_cat_ID('Книги'); ?>
	<?php $cat_book_name = get_cat_name($cat_book_id); ?>
	<h1><?php echo $cat_book_name; ?></h1>
	<div class="book-cards">
		
		<?php if (have_posts() ) : query_posts( array('cat' => $cat_book_id) );?>
		<?php while(have_posts() ) :the_post(); ?>
		<div class="book-card">
			<?php the_post_thumbnail(); ?>
			<div class="book-info">
				<?php the_content(); ?>
				<a href="#">Добавить в карзину</a>
			</div>	
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</div>