<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *

 * @package library
 */
$url = get_template_directory_uri();
$user_id = get_current_user_id();

if ($user_id=="") {
	wp_redirect(wp_login_url());
}else{
	$user = get_userdata( $user_id );
	$user_name = $user->user_login;
}

get_header();?>
<section class="user-info-container">
	<div class="user-card">
		<div class="user-img">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/images.jpg" alt="">
		</div>
		<div class="user-content">
			<li><b>login: </b><?php echo $user_name; ?><li>
			<li><b>Номер билета: </b>225468</li>
			<a href="http://lib.nbe.kg/account/">Мой аккаунт</a>
			<?php $page_id = 10; ?>
			<?php wp_loginout(); ?>
		</div>
	</div>
</section>

<section class="book-container">
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
				<a href="#">Добавить в корзину</a>
			</div>	
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</section>

<?php get_footer(); ?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
