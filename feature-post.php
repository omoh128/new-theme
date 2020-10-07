
<?php
  $args = array(
        'posts_per_page' => 5,
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
    );
    $featured = new WP_Query($args);
    if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

<li>
                                <h1>FEATURED POSTS</h1>
                                <?php if (has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
								<h2><?php the_title(); ?></h2>
								<span><?php the_time(' l jS F Y'); ?></span>
                            </li>
                            <?php
endif;
endwhile; else:
endif;
?>