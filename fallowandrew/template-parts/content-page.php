<?php
/**
 * Template part for displaying page content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shoptemplate
 */

?>
	<header class="page-title theme-bg-light text-center gradient py-5">
		<?php the_title('<h1 class="heading">', '</h1>'); ?>
	</header>
	
	<section class="theme-bg-dark py-5 text-center">
		<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
		<?php get_search_form(); ?>
	</section>

	<article class="content px-3 py-5 p-md-5">

		<div class="container">
			<p class="mt-3 lead">
				<?php
				the_content();
				?>
			</p>
			
		</div>

	</article>

	



