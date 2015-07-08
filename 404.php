<?php
/**
 * The main 404 "page not found" file.
 *
 * @package JDahmen
 * @subpackage JDahmen_Theme
 */

// Gets header.php
get_header(); ?>
	 
	<div class="container">
		<div class="row">
			<div class="col-md-12 error-404">
				<h1>404 - Not found!</h1>
				<h3><i>Sorry, the page you are looking for does not exist.</i></h3>
				<p><a href="<?php echo get_home_url(); ?>">Return to the homepage</a></p>
			</div>
		</div>
	</div>


<?php // Gets footer.php
	get_footer(); ?>