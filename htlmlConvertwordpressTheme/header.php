<!DOCTYPE HTML>
<!--
	tempalte convert wordpress theme
-->
<html <?php language_attributes(  );?>>
	<head>
		<meta charset="<?php bloginfo( 'charest' );?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <?php wp_head(  )?>
   </head>
	<body <?php body_class( 'homepage is-preload' )?> >
		<div id="page-wrapper">
        <!-- Header -->
			<section id="header">
					<!-- Logo -->							  
							 <?php the_custom_logo(  )?>
							
						  </div>
					<!-- Nav -->

						<nav id= "nav">
						<?php
							wp_nav_menu( array( 'theme_location' => 'headermenu', 
							'container'=>''
							) );
						     ?>						
						</nav>

				</section>
