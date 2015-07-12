  <footer>
  <div class="container">
  	<div class="row">
  		<div class="col-md-4">

  		</div>
  		<div class="col-md-4">

  		</div>
  		<div class="col-md-4">
  			<h3>Social</h3>
  			<?php // footer menu
				wp_nav_menu( array(
					'container_class' => 'social-links',
					'theme_location' => 'social-footer' 
				) ); 
			?>
  		</div>
  	</div>
    <div id="copyright" class="row">
      <div class="col-md-12">
        &copy; Jordan Dahmen, 2015
      </div>
    </div>
  </footer>
</div>
