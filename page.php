<?php

get_header(); ?>

  <div id="banner">    
      				<?php
				 the_custom_header_markup();
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
    </div>
	
<br>
	<!-- site-content -->
	<div class="site-content clearfix">
		
		<!-- main-column -->
		<div class="main-column">
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', 'page');

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
		</div><!-- /main-column -->
        

        <?php if (is_page(120)) {?>
        
        get_sidebar();
        
        <?php }?>
    
    
                    
		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>