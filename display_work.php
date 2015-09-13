<?php
/**
 * A full width page template file.
 *
 * @package JDahmen
 * @subpackage JDahmen_Theme
 * 
 * Template Name: Display Work 
 */

// Gets header.php
get_header(); ?>
	 
	<?php // include 'inc/index-header.php'; ?>

	<div id="content">
		<div class="container">
			<div class="row">
				<?php include 'inc/display-work.php'; ?>
			</div>
		</div>
	</div>

<?php // Gets footer.php
	get_footer(); ?>