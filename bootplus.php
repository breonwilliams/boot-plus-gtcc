<?php
   /*
   Plugin Name: Boot Plus GTCC
   Plugin URI: http://breonwilliams.com
   Description: adds shortcodes
   Version: 1.1
   Author: Breon Williams
   Author URI: http://breonwilliams.com
   License: GPL2
   */
$bootplus_shortcodes_path = dirname(__FILE__);
$bootplus_shortcodes_main_file = dirname(__FILE__).'/bootplus.php';
$bootplus_shortcodes_directory = plugin_dir_url($bootplus_shortcodes_main_file);
$bootplus_shortcodes_name = "Boot Plus";

/* Add shortcodes scripts file */
function bootplus_shortcodes_add_scripts() {
  global $bootplus_shortcodes_directory, $bootplus_shortcodes_path;
  if(!is_admin()) {
    
    /* Includes */
    include($bootplus_shortcodes_path.'/assets/functions.php');
      wp_enqueue_style('style-css', $bootplus_shortcodes_directory.'assets/css/style.css');
      wp_enqueue_style('lity-css', $bootplus_shortcodes_directory.'assets/css/lity.css');
      wp_enqueue_style('bgvid-css', $bootplus_shortcodes_directory.'assets/css/background-vid.css');
      wp_enqueue_style('events-css', $bootplus_shortcodes_directory.'assets/css/recent-events.css');
      wp_enqueue_style('slick-css', $bootplus_shortcodes_directory.'assets/css/slick.css');
      wp_enqueue_style('slick-theme', $bootplus_shortcodes_directory.'assets/css/slick-theme.css');
      wp_enqueue_style('dataTables-css', $bootplus_shortcodes_directory.'assets/css/datatables.min.css');
    wp_enqueue_style('dataTables-bootstrap', $bootplus_shortcodes_directory.'assets/css/dataTables.bootstrap.min.css');
    wp_enqueue_style('dataTables-buttons', $bootplus_shortcodes_directory.'assets/css/buttons.bootstrap.min.css');
    wp_enqueue_style('dataTables-responsive', $bootplus_shortcodes_directory.'assets/css/responsive.bootstrap.min.css');
    wp_enqueue_style('slick-nav', $bootplus_shortcodes_directory.'assets/css/slicknav.css');
        }}
add_filter('init', 'bootplus_shortcodes_add_scripts');



function wpb_adding_scripts() {
  global $bootplus_shortcodes_directory, $bootplus_shortcodes_path;
    wp_register_script( 'lity-js', $bootplus_shortcodes_directory.'assets/js/lity.js', 'jquery','1.0',true);
    wp_register_script( 'bgvid', $bootplus_shortcodes_directory.'assets/js/jquery.background-video.js', 'jquery','1.0',true);
    wp_register_script( 'bgvid-js', $bootplus_shortcodes_directory.'assets/js/background-video.js', 'jquery','1.0',true);
    wp_register_script( 'slick-js', $bootplus_shortcodes_directory.'assets/js/slick.js', 'jquery','1.0',true);
    wp_register_script( 'slick-init', $bootplus_shortcodes_directory.'assets/js/slick-init.js', 'jquery','1.0',true);
    wp_register_script( 'parallax', $bootplus_shortcodes_directory.'assets/js/parallax.js', 'jquery','1.0',true);
    wp_register_script( 'modal', $bootplus_shortcodes_directory.'assets/js/modal.js', 'jquery','1.0',true);
    wp_register_script( 'dataTables-init', $bootplus_shortcodes_directory.'assets/js/dataTables-init.js', 'jquery','1.0',true);
  wp_register_script( 'showhide-js', $bootplus_shortcodes_directory.'assets/js/showhide-toggle.js', 'jquery','1.0',true);
  wp_register_script( 'dataTables-min', $bootplus_shortcodes_directory.'assets/js/jquery.dataTables.min.js', 'jquery','1.0',true);
  wp_register_script( 'buttons-min', $bootplus_shortcodes_directory.'assets/js/dataTables.buttons.min.js', 'jquery','1.0',true);
  wp_register_script( 'colVis-js', $bootplus_shortcodes_directory.'assets/js/buttons.colVis.min.js', 'jquery','1.0',true);
  wp_register_script( 'html5-js', $bootplus_shortcodes_directory.'assets/js/buttons.html5.min.js', 'jquery','1.0',true);
  wp_register_script( 'print-js', $bootplus_shortcodes_directory.'assets/js/buttons.print.min.js', 'jquery','1.0',true);
  wp_register_script( 'databootstrap-js', $bootplus_shortcodes_directory.'assets/js/dataTables.bootstrap.min.js', 'jquery','1.0',true);
  wp_register_script( 'buttonsboot-js', $bootplus_shortcodes_directory.'assets/js/buttons.bootstrap.min.js', 'jquery','1.0',true);
  wp_register_script( 'jszip-js', $bootplus_shortcodes_directory.'assets/js/jszip.min.js', 'jquery','1.0',true);
  wp_register_script( 'pdfmake-js', $bootplus_shortcodes_directory.'assets/js/pdfmake.min.js', 'jquery','1.0',true);
  wp_register_script( 'vfs_fonts-js', $bootplus_shortcodes_directory.'assets/js/vfs_fonts.js', 'jquery','1.0',true);
  wp_register_script( 'responsive-js', $bootplus_shortcodes_directory.'assets/js/dataTables.responsive.min.js', 'jquery','1.0',true);
  wp_register_script( 'responsive-bootstrap', $bootplus_shortcodes_directory.'assets/js/responsive.bootstrap.min.js', 'jquery','1.0',true);
  wp_register_script( 'slicknav-js', $bootplus_shortcodes_directory.'assets/js/jquery.slicknav.js', 'jquery','1.0',true);
  wp_register_script( 'slicknav-init', $bootplus_shortcodes_directory.'assets/js/slicknav-init.js', 'jquery','1.0',true);

  wp_enqueue_script( 'slicknav-js' );
  wp_enqueue_script( 'slicknav-init' );

  function init_customizations() {
    if (is_tax('course_category')) {
      wp_enqueue_script( 'dataTables-init' );
      wp_enqueue_script( 'dataTables-min' );
      wp_enqueue_script( 'buttons-min' );
      wp_enqueue_script( 'colVis-js' );
      wp_enqueue_script( 'html5-js' );
      wp_enqueue_script( 'print-js' );
      wp_enqueue_script( 'databootstrap-js' );
      wp_enqueue_script( 'buttonsboot-js' );
      wp_enqueue_script( 'jszip-js' );
      wp_enqueue_script( 'vfs_fonts-js' );
      wp_enqueue_script( 'pdfmake-js' );
      wp_enqueue_script( 'responsive-js' );
      wp_enqueue_script( 'responsive-bootstrap' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'init_customizations', 0 );

}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );








   
// Add Formats Dropdown Menu To MCE
if ( ! function_exists( 'wpex_style_select' ) ) {
  function wpex_style_select( $buttons ) {
    array_push( $buttons, 'styleselect' );
    return $buttons;
  }
}
add_filter( 'mce_buttons', 'wpex_style_select' );



// Hooks your functions into the correct filters
function my_add_mce_button() {
  // check user permissions
  if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
    return;
  }
  // check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
    add_filter( 'mce_buttons', 'my_register_mce_button' );
  }
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function my_add_tinymce_plugin( $plugin_array ) {

    $plugin_array['my_mce_button'] = plugins_url( '/assets/js/mce-button.js', __FILE__ );

  return $plugin_array;
}

// Register new button in the editor
function my_register_mce_button( $buttons ) {
  array_push( $buttons, 'my_mce_button' );
  return $buttons;
}

include($bootplus_shortcodes_path.'/assets/custom-meta.php');
include($bootplus_shortcodes_path.'/assets/recent-events.php');
include($bootplus_shortcodes_path.'/assets/recent-posts.php');
include($bootplus_shortcodes_path.'/assets/thumbnails.php');
include($bootplus_shortcodes_path.'/assets/google-map.php');
include($bootplus_shortcodes_path.'/assets/page-categories.php');
include($bootplus_shortcodes_path.'/assets/taxonomy-posts-list.php');


