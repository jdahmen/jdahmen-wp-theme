<?php
/**
 * The main template file.
 *
 * @package JDahmen
 * @subpackage JDahmen_Theme
 */

// Gets header.php
get_header(); ?>
	 
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<?php include 'inc/display-posts.php'; ?>
			</div>
			<div class="col-md-8 hidden-sm">
			</div>
		</div>
	</div>


<?php // Gets footer.php
	get_footer(); ?>