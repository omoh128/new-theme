<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    
	<div id="body">
			<div class="header">
				<div>
		
					<div class="article">
                         <?php the_post_thumbnail();?>
					    
						<h1><?php the_title(); ?></h1>
						
						<span><?php the_time(' l jS F Y'); ?></span>
						<p><?php the_content(); ?></p>
						
					</div>
					<div class="sidebar">
						<ul>
							<li>
								<h1>RECENT POSTS</h1>
								<ul>
								<?php include_once( 'side-bar.php' );?>
								</ul>
							</li>
						</ul>
						
					</div>
					
				</div>
			</div>
		</div>
		
    
  <?php }

  get_footer();
?>