<?php get_header( ); ?>

<div class="main-wrapper">

    <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php 
                the_post_navigation(
                    array(
                        'prev_text' => '<i
                        class="arrow-prev fas fa-long-arrow-alt-left" style="color:#ffffff;"></i>' . '<span class="nav-subtitle">' . esc_html__( 'Previous', 'fallowandrew' ) . '</span> ',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'fallowandrew' ) . '</span> ' . '<i
                        class="arrow-next fas fa-long-arrow-alt-right" style="color:#ffffff;"></i>',
                        'excluded_terms' => '4',
                        'class' => 'fallowandrew-nav'
                    )
                );
            ?>

            <?php 
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; // End of the loop. 
    ?>

<?php get_footer( ); ?>