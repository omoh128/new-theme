<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta charset="<?php bloginfo('charset'); ?>">
     <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="page">
		<div id="header">
			<div>
      <a href="<?php echo esc_url( home_url('/') ) ; ?>" class="logo">
      <img class="logo"src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png); "  alt="Mountain-Conqueror"></a>

				<ul id="navigation">
        <?php $args = array( 'theme_location' => 'header-menu',
        
        
        'menu_class' =>'selected'

       );
        wp_nav_menu($args);
?>
				</ul>
			</div>
		</div>