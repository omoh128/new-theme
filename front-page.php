<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="body" class="home">
			<div class="header">
				<div>
					<img src="images/satellite.png" alt="" class="satellite">
					<h1>Yeshua is Life
						</h1>
					<h5>John 14:19 …because I live, ye shall also live.</h5>
					<a href="<?php echo site_url('/blog'); ?>" class="more">Read More</a>
					<h3><?php the_field('blog_title_1'); ?></h3>
					<ul>
					<?php 
							 $image = get_field('blog_image_1');
							 if( !empty( $image ) ): ?>
						<li>
						
							<a href="<?php echo site_url('/blog'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
							
						</li>
						<?php endif; ?>
						<?php 
						$image = get_field('blog_image2');
							 if( !empty( $image ) ): ?>
						<li> 
      
							<a href="<?php echo site_url('/blog'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
						</li>
						<?php endif; ?>
						<?php $image = get_field('blog_image_3');
							 if( !empty( $image ) ): ?>
						<li>
							<a href="<?php echo site_url('/blog'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
						</li>
						<?php endif; ?>
						<?php $image = get_field('blog_image_4');
							 if( !empty( $image ) ): ?>
						<li>
							<a href="<?php echo site_url('/blog'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="body">
				<div>
					<h1><?php the_field('content_tile'); ?></h1>
					
					<p><?php the_field('content_area'); ?></p>
				</div>
			</div>
			<?php include_once( 'sidebar.php' );?>
			</div>
		</div>


        <?php
        
        // Stop the loop when all posts are displayed
        endwhile;

        // If no posts were found
        else :
        ?>

        <?php
        endif;
        ?>




<?php get_footer();?>