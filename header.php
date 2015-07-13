<?php include 'inc/head.php'; ?>

<body <?php body_class(); ?>>
	<?php 
		// check if front page
		if ( is_front_page() && is_home() ) {
			// front page
			include 'inc/front-main-nav.php';
		} else {
			// not front page
			include 'inc/main-nav.php';
		}
	?>

	<div id="content">
		<div id="header-image">
			<!-- Leave empty -->
		</div>

