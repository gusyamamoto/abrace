<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abrace_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(
			esc_html__('Design by%s%s', 'text-domain'),
			'&nbsp;',
			'<a href="https://ghyamamoto.com">Gustavo Yamamoto</a>'
		);


		?>
		<p class="footer-direitos">
			<?php
			echo esc_html__('©2025 Abrace - Todos os direitos reservados', 'abrace-theme');
			?>
		</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>