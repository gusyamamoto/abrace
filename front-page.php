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
 * @package Abrace_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );

			?>
				<header>
					<h1>Qualidade é mais do que um diferencial.</br>É uma necessidade.</h1>
					<?php get_template_part('template-parts/content', 'button-orc')?>
				</header>
				
				<section id="servicos">
					<h2>Nossos Serviços</h2>
					<?php get_template_part('template-parts/content', 'servicos')?>
				</section>

				<section id="parceiros">

				</section>
			<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();