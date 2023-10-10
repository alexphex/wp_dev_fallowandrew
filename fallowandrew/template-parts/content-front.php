<?php
/**
 * Template part for displaying page content in front-page.php
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

		<div class="container">
			<p class="mt-3 lead">
				<?php
				the_content();
				?>
			</p>

			<!-- carousel -->
			<div id="carouselExampleControls" class="carousel slide pointer-event" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 3)); ?>
					<?php $count = 0; ?>
					<?php foreach($slider as $slide): ?>
						<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
						</div>
						<?php $count++; ?>
					<?php endforeach; ?>
				</div>

				<!-- Controls -->
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
            </div>

			<!-- !!! for security use better a form plugin (exo Contact Form 7) -->
			<section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
				<?php get_search_form(); ?>
			</section>

			<!-- cards -->
			<div class="row row-cols-1 mt-4 row-cols-md-2">

				<?php $posts = get_posts ("category=4&order=ASC&numberposts=2"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>
							<div class="col mb-4">	
								<div class="card">
									<div class="card-body">
									<h5 class="card-title"><?php the_title();?></h5>
									<p class="card-text"><?php the_content( ); ?></p>
									</div>
								</div>
							</div>
					<?php endforeach; ?>
				<?php endif; ?>

			</div>
			
		</div>

	</article>

	

