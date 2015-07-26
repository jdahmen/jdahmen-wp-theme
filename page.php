<?php
/**
 * The main template file.
 *
 * @package JDahmen
 * @subpackage JDahmen_Theme
 */

// Gets header.php
get_header(); ?>
	 
	<?php // include 'inc/index-header.php'; ?>

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php include 'inc/display-single.php'; ?>
				</div>
			</div>
		</div>
	</div>

<?php // Gets footer.php
	get_footer(); ?>