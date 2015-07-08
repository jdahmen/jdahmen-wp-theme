<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="main-navbar">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo" alt="JDahmen logo">
      </a>
    </div>

    	<!-- Collect the nav links for toggling -->
		  <?php // Loading WordPress Custom Menu
		     wp_nav_menu( array(
		        'container_class' => 'collapse navbar-collapse',
		        'menu_class'      => 'nav navbar-nav navbar-right',
		        'menu_id'         => 'fancy-menu',
		        'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
		    ) );
		  ?>
      <!--/.nav-collapse -->
  </div>
</nav>