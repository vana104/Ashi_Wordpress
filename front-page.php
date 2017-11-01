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
	
	<!-- site-content -->
	<div class="site-content clearfix">
		
        
			

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
               <?php if (get_theme_mod('lwp-footer-callout-display') == "Yes") { ?>
		<div class="footer-callout clearfix">
			<div class="footer-callout-image">
				<a href="<?php echo get_permalink(get_theme_mod('lwp-footer-callout-link')) ?>"><img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-footer-callout-image')) ?>"></a>
			</div>

			<div class="footer-callout-text">
				<h2><a href="<?php echo get_permalink(get_theme_mod('lwp-footer-callout-link')) ?>"><?php echo get_theme_mod('lwp-footer-callout-headline') ?></a></h2>
				<?php echo wpautop(get_theme_mod('lwp-footer-callout-text')) ?>
				<p><a href="<?php echo get_permalink(get_theme_mod('lwp-footer-callout-link')) ?>"><button class="aboutbutton">Learn more &raquo;</button></a></p>
			</div>
		</div>
		<?php } ?>
        
				<!-- home-columns -->
				<div class="home-columns clearfix">
					
					<!-- one-half -->
					<div class="one-half">
						
										
						<?php // opinion posts loop begins here
						$opinionPosts = new WP_Query('cat=6&posts_per_page=2');

						if ($opinionPosts->have_posts()) :

							while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata(); ?>
						
						<span class="horiz-center"><button  class="btn-a"><a href="<?php echo get_category_link(6); ?>">View all News Posts</a></button></span>
						
					</div><!-- /one-half -->
					
					<!-- one-half -->
					<div class="one-half last">
						
										
						<?php // news posts loop begins here
						$newsPosts = new WP_Query('cat=5&posts_per_page=2');

						if ($newsPosts->have_posts()) :

							while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>
						
						<span class="horiz-center"><button class="btn-a"><a href="<?php echo get_category_link(6); ?>">View all News Posts</a></button></span>
						
					</div><!-- /one-half -->
                    
                    <div class="one-half npot">
						
										
						<?php // news posts loop begins here
						$newsPosts = new WP_Query('cat=7&posts_per_page=2');

						if ($newsPosts->have_posts()) :

							while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>
						
						<span class="horiz-center"><button  class="btn-a"><a href="<?php echo get_category_link(6); ?>">View all News Posts</a></button></span>
						
					</div><!-- /one-half -->
                    
					
				</div><!-- /home-columns -->
			
        
		
        
	<!-- /site-content -->
	
	<?php get_footer();

?>