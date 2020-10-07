<div class="footer">
				<div>
					<ul>
						<li>
							<h1><?php the_field('video_title'); ?></h1>
							<a href="blog.html"><?php the_field('video_watch'); ?><span></span></a>
							
						</li>
						<li>
							<h1><?php the_field('blog_title'); ?></h1>
							<ul>
                            <ul>
 
                                <?php 
                                // Define our WP Query Parameters
                                $the_query = new WP_Query( 'posts_per_page=2' ); ?>
                                
                                
                                <?php 
                                // Start our WP Query
                                while ($the_query -> have_posts()) : $the_query -> the_post(); 
								// Display the Post Title with Hyperlink
								
                                ?>

								<li>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'alignleft')); ?></a>
									<h1><?php the_title(); ?></h1>
									<span><?php the_time(' l jS F Y'); ?></span>
									<a href="<?php the_permalink(); ?>" class="more">Read More</a>
								</li>
								<?php 
                    // Repeat the process and reset once it hits the limit
                                endwhile;
                                wp_reset_postdata();
                            ?>
							</ul>
						</li>
					</ul>
				</div>