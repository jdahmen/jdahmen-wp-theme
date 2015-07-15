<?php
/**
 * A single post template file.
 *
 * @package JDahmen
 * @subpackage JDahmen_Theme
 */

// Gets header.php
get_header(); ?>
	 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="button" href="<?php echo  get_permalink(get_option('page_for_posts')) ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Return to blog</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<?php include 'inc/display-single.php'; ?>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<?php include 'inc/single-sidebar.php'; ?>				
			</div>
		</div>
	</div>


<?php // Gets footer.php
	get_footer(); ?>