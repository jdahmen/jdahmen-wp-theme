<!-- <head> elements -->
<?php include 'inc/head.php'; ?>

<body data-spy="scroll" data-offset="80" data-target=".navbar-collapse" <?php body_class(); ?>>

	<?php
		// Front page custom main menu
		include 'inc/front-main-nav.php';

  	// Fancy page custom header
  	include 'inc/fancy.php';

  	// Front page changable content
  	include 'inc/front-content.php';

  	// Front page custom
  	include 'inc/front-footer.php';
	?>	

<!-- </body> in following file -->
<?php include 'inc/foot.php'; ?>