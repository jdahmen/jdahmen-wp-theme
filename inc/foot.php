
	  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/affix.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prism.js"></script>

	<?php 
	/**
	 * Default Footer
	 *
	 * @package JDahmen
	 * @subpackage JDahmen_Theme
	 *
	 */
	 
	// Gets all the scripts included by wordpress, wordpress plugins or functions.php 
	// using wp_enqueue_script if it has $in_footer set to true
	wp_footer(); ?>
</body>
</html>