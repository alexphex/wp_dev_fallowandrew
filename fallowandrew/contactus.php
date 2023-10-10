<?php
/**
 *
 * Template Name: Contact Us
 *
 */

get_header();
?>

    <div class="main-wrapper">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'contact' );

		endwhile; // End of the loop.
		?>

	</div><!-- #main -->

<?php
get_footer();