<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package library
 */

?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/library_icon-icons.com_71153 1.svg" alt="">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/LIBRARY.svg" alt="">
		</div>
		<div class="top-menu">
			<?php wp_nav_menu( array(
				'theme_location'  => 'top_menu',
				'menu'            => '',
				'container'       => null,
				'container_class' => null,
				'menu_class'      => null,
			) ); ?>
		</div>
		<div class="search-block">
			<?php get_search_form(); ?>
		</div>
	</header>
