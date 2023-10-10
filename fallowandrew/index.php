<?php get_header( ); ?>

<div class="main-wrapper">

    <header class="page-title theme-bg-light text-center gradient py-5">
		<h1 class="heading"> Blog Arhive </h1>
	</header> 
 
    <section class="content px-3 py-5 p-md-5">

		<div class="container">
			<p class="mt-3 lead">
                <?php 
                    query_posts('showposts=10&category_name=recent');
                    if ( have_posts() ) : while ( have_posts() ) : the_post();?>

                        <div class="post mb-5">
                            <div class="media">
                            <?php the_post_thumbnail('thumbnail'); ?>
                                <div class="media-body">
                                    <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="meta mb-1">
                                        <span class="date"><?php echo wp_date( 'F j, Y' ); ?></span>
                                        <span class="time"><?php //echo reading_time() ?></span>
                                        <span class="comment">
                                            <a href="<?php the_permalink() ?>#comments"><?php comments_number('any comment', '1 comment', '% comments'); ?></a>
                                        </span>
                                    </div>
                                    <div class="intro"><?php the_excerpt(); ?></div>
                                    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
                                </div><!--//media-body-->
                            </div><!--//media-->
                        </div>
                    
                    <?php
                    endwhile; else:
                    // No posts.
                    endif;
                    wp_reset_query();
                ?>
            </p>
		</div>

    </section>

<?php get_footer( ); ?>