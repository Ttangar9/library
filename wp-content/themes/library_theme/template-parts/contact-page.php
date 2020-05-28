<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

?>

<article id="post-<?php the_ID(); ?>" class="contact-container">
	<div class="contact-block">
		<?php the_content();?>
		<h2>Обратная связь</h2>
		<p>Оставте нам свой номер и мы с вами свяжемся в ближайшее время</p>
		<form action="#">
			<input type="text" id="name_user" placeholder="Имя">
			<input type="email" id="email_user" placeholder="Эл.адрес">
			<textarea id="message_user" placeholder="Cообщения"></textarea>
			<input type="submit" id="send_btn" value="Отправить">
		</form>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
