<?php get_header(); ?>

<div id="body">
			<div class="header">
				<div>
					
					<div class="article">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post();  ?>
						<ul>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
								
								<h1><?php the_title(); ?></h1>
								
								<span><?php the_time(' l jS F Y'); ?></span>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="more">Read More</a>
								
							</li>
						</ul>
						<?php endwhile; ?>
						
						<div class="nexpage">
							<div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
							<div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
							
	
				
						</div>
						
							<?php
							endif;
							?>
				
						
					</div>
				
			
					<div class="sidebar">
						<ul>
						<li>
                                <h1>FEATURED POSTS</h1>
                               
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
								<h2><?php the_title(); ?></h2>
								<span><?php the_time(' l jS F Y'); ?></span>
                            </li>
						
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

<?php get_footer(); ?> 