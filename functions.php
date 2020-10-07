<?php
/**
 * Register Custom Navigation Walker
 */


function basic_script_enqueue() {
  
  
   wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );
   wp_register_style( 'custom_style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
   wp_register_style( 'mobile_style', get_template_directory_uri() . '/css/mobile.css', array(), '1.0.0', 'all');



   
   // Enqueue the style
   wp_enqueue_style('font-awesome');
   wp_enqueue_style('custom_style');
   wp_enqueue_style('mobile_style');

   
 
  
   wp_register_script('mobile-js', get_template_directory_uri() . '/Js/mobile.js', array('jquery'), '1.0.0', true);
 
   
   // JavaScript files

   
   wp_enqueue_script('mobile-js');
 }

 add_action( 'wp_enqueue_scripts', 'basic_script_enqueue' );

// setuptheme
function basic_features() {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_image_size('boxes', 437, 291, true );
   add_image_size('boxes', 150, 150, true );
   add_image_size('background', 1268, 515, true);
 }

add_action('after_setup_theme', 'basic_features');


// Menus
function basictheme_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'basictheme'),
        'social-menu' => __('Social Menu', 'basictheme')
    ) );
}
add_action('init', 'basictheme_menus');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar(array(
      'name' => 'My_Widgtet_Area',
      'id' => 'partner-slide',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'arphabet_widgets_init');


?>
<?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>



<?php 
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );
?>