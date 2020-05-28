<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

get_header();
?>

	<div id="primary" class="main-block_pages">
		<?php if (is_page('Контакты')) {
			while(have_posts()) :the_post();
			get_template_part( 'template-parts/contact', 'page' );
		endwhile;
		}else if(is_page('Новости')){
			get_template_part('template-parts/content', 'news-page');
		}else if(is_page('Каталог книг')){
			get_template_part('template-parts/content','category-book');
		}else if(is_page('Личный кабинет')){
			get_template_part('template-parts/content','profil');
		}
		?>
	</div><!-- #primary -->

<?php
get_footer();?>
