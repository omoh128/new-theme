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

								</li>
								<?php
                    // Repeat the process and reset once it hits the limit
                                endwhile;
                                wp_reset_postdata();?>
	</ul>
