<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	
                   <?php wp_nav_menu(  $args ); ?>

	
		<!-- site-header -->





        
        
	<!--	<header class="site-header">
			
		
			
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?> <?php if (is_page('portfolio')) { ?>
				- Thank you for viewing our work
			<?php }?></h5>
			
			
			

			
		</header><!-- /site-header -->