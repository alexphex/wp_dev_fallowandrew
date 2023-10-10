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

	<article class="content px-3 py-5 p-md-5">
		<div class="content-body">

			<?php if ( has_post_thumbnail() ) : ?>


				<figure class="blog-banner">
					<?php the_post_thumbnail('medium_large'); ?>
				</figure>


			<?php endif; ?>

			<div class="container">
				<p class="mt-3 lead">
					<?php
					the_content();
					?>
				</p>
			</div>

		</div>
	</article>

	



