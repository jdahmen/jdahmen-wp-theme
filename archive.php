<?php
/**
 * The archive template file.
 *
 * @package JDahmen
 * @subpackage JDahmen_Theme
 */

// Gets header.php
get_header(); ?>
	 
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<?php include 'inc/display-archives.php'; ?>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<?php include 'inc/single-sidebar.php'; ?>		
			</div>
		</div>
	</div>


<?php // Gets footer.php
	get_footer(); ?>