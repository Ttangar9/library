<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="book-card">
        <?php the_post_thumbnail(); ?>
        <div class="book-info">
            <?php the_content(); ?>
            <a href="#">Добавить в карзину</a>
        </div>
	</div>
</article>
