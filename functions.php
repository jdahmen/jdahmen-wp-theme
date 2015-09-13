<?php 

/* Adapted from https://gist.github.com/toscho/1584783 */
add_filter( 'clean_url', function( $url )
{
    if ( FALSE === strpos( $url, '.js' ) )
    { 
      // not our file
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

function custom_comments ($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class('col-md-12'); ?> id="comment-li-<?php comment_ID(); ?>">
      <div class="row">
        <div class="col-md-1 col-xs-2 comment-avatar">
          <?php echo get_avatar($comment, $size='256', $default='mystery'); ?>
        </div>
        <div class="col-md-11 col-xs-10">
          <div class="row comment-content">
            <div class="col-md-12 comment-author vcard">   
              <?php printf(__('<cite class="fn">%s</cite> '),  get_comment_author( $comment_ID )) ?>
              <div class="comment-meta">
                <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?>
                <?php edit_comment_link(__('(Edit)'),'  ','') ?>
              </div>
            </div>

            <?php if ($comment->comment_approved == '0') : ?>              
              <div class="col-md-12">
                <em><?php _e('Your comment is awaiting moderation.'); ?></em>
                <br />
              </div>
            <?php endif; ?>

            <div class="col-md-12 text">
              <?php comment_text(); ?>
            </div>

            <div class="col-md-12">
              <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
}

/* Comment submission form customization */

function alter_comment_form_fields($fields){
    
  $fields = array(
    'author' =>
      '<div class="row"><div class="col-md-6 comment-form-author "><div class="action-wrapper">' . 
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' />' . 
      '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
      '</div></div>',

    'email' =>
      '<div class="col-md-6 comment-form-email"><div class="action-wrapper">' . 
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' />' .       
      '<label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
      '</div></div></div>',

    'url' => '',
  );

  return $fields;
}

add_filter('comment_form_default_fields','alter_comment_form_fields');

//DEREGISTER CONTACT FORM 7 STYLES
add_action( 'wp_print_styles', 'voodoo_deregister_styles', 100 );
 
function voodoo_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

define ('WPCF7_AUTOP', false );   // set to false to remove <br> tags
define ('WPCF7_LOAD_JS', false); // Added to disable JS loading

?>