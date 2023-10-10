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
	
	<section class="py-5 text-center">

        <!-- !!! for security use better a form plugin (exo Contact Form 7) -->
		<?php 
		   echo	do_shortcode( '[contact-form-7 id="a0b3cdd" title="Contact form 1"]' );
        ?>
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

	



