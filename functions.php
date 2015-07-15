<?php 

// Adapted from https://gist.github.com/toscho/1584783
add_filter( 'clean_url', function( $url )
{
    if ( FALSE === strpos( $url, '.js' ) )
    { // not our file
        return $url;
    }
    // Must be a ', not "!
    return "$url' defer='defer";
}, 11, 1 );

function cwd_wp_bootstrap_scripts_styles() {
  // Loads Bootstrap minified JavaScript file.
  wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'),'3.3.5', true );
  // Loads Bootstrap minified CSS file.
  wp_enqueue_style('bootstrapwp', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', false ,'3.3.5');
  // Loads our main stylesheet.
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('bootstrapwp') );
}

add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles');

if ( ! function_exists( 'cwd_wp_bootstrapwp_theme_setup' ) ):
  function cwd_wp_bootstrapwp_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'front-main-menu' => __( 'Main Menu', 'cwd_wp_bootstrapwp' ),
      'main-menu' => __( 'Main Menu', 'cwd_wp_bootstrapwp' ),
      'social-footer' => 'Social Footer Links',
    ) );
  }
endif;

add_theme_support( 'html5', array( 'search-form' ) );

add_theme_support( 'post-thumbnails' ); 

add_action( 'after_setup_theme', 'cwd_wp_bootstrapwp_theme_setup' );

require_once 'inc/nav.php';

?>