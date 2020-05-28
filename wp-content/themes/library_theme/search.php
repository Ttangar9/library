<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package init
 */

get_header();
?>

	<section id="primary" class="book-container">
		<h1>Результаты поиска</h1>

        <div class="book-cards">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'search' ); ?>
                <?php endwhile; ?>


            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div>

	</section><!-- #primary -->

<?php
get_footer();
