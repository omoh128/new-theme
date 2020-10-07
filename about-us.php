
<?php /* Template Name: AboutUs*/ ?>

<?php get_header(); ?>


         <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
           <div id="body" class="about" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; top #000000;">
			<div class="header">
				<div>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h1>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<div class="body">
				<div>
				<?php 
				$image = get_field('image');
				if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				
					<h2><?php the_field('about_content_h1'); ?> </h2>
					<p><?php the_field('about_content_1'); ?></p>
				</div>
			</div>
			<?php endif; ?>
			<div class="footer">
				<div>
				<?php if( get_field('about_image2') ): ?>
				<img src="<?php the_field('about_image2'); ?>" />
				<?php endif; ?>
			
					<h2><?php the_field('about_title_2'); ?></h2>
					<p><?php the_field('about_content_2'); ?></p>
				</div>
			</div>
			<div class="section">
				<div>
					
					<p><?php the_field('about_last'); ?></p>
				</div>
			</div>
        </div>
        

<?php get_footer(); ?> 