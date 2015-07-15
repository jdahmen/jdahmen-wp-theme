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
			<div class="container">
				<div  class="superheader">
					<h1>
						<?php
							if ( is_archive() ) {
								echo 'Archives';
							} elseif ( is_home() ) {
								echo 'Blog';
							} else {
								echo '&nbsp;';
							}
						?>
					</h1>
				</div>
			</div>
			<div class="blue-bar"></div>
		</div>

