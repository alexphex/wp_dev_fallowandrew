<!DOCTYPE html>
<html l<?php language_attributes(  ); ?>> 
<head>
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Meta -->
    <meta charset=<?php bloginfo( 'charset' ); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(  ); ?>
</head> 

<body>
    <header class="header text-center">	    
	    <a class="site-title pt-lg-4 mb-0" href="<?php echo home_url(); ?>"><?php bloginfo( 'title' ) ?></a>

	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<!-- logo -->
				<?php 
					if(function_exists('the_custom_logo')){

						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						echo '<img class="mb-3 mx-auto logo" src="'.$image[0].'">';

					}
				?>
				<!-- menu -->
				<?php 
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => '',
						'container_class' => 'collapse navbar-collapse flex-column',
						'container_id'    => 'navigation',
						'menu_class'      => 'navbar-nav flex-column text-sm-center text-md-left',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>

				<hr>

				<!-- social -->
				<?php wp_nav_menu( array(
					'theme_location'  => 'social',
					'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => '',
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'social-list list-inline py-3 mx-auto',
				) ); 
				?>
				
		
			</div>

		</nav>
    </header>
    
