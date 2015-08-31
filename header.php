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
		<div id="header-image" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/fancy-bg.jpg">
			<div class="container" id="standard-header">
				<div  class="superheader">
					<h1>
						<span><?php
								if ( is_archive() ) {
									echo 'Archives';
								} elseif ( is_home() ||  is_single() ) {
									echo 'Blog';
								} elseif (the_title()) {
									echo get_the_title();
								} else {
									echo '';
								}
							?></span>
					</h1>
				</div>
			</div>
			<div class="page-bar"></div>
		</div>

