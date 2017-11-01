
<?php

/*
Template Name: Special Layout
*/

get_header();
?>
  <div id="banner">    
      				<?php
				 the_custom_header_markup();
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
    </div>



<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	
get_footer();

?>