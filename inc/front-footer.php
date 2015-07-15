    <footer>
        <div class="container">
      	    <div class="row">
      		    <div class="col-md-4">
                    <h3>This is the footer...</h3>
                    <p>
                        and it appears you're looking for more! Maybe go check out my 
                        <a href="<?php echo bloginfo('url') . '/blog/'; ?>">blog</a> to 
                        see my latest project, or get in touch on my 
                        <a href="<?php echo bloginfo('url') . '/blog/'; ?>">contact</a> page.
                    </p>
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
              <div id="copyright" class="col-md-4 center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo" alt="JDahmen logo">
                    &copy; Jordan Dahmen, 2015
              </div>
      	    </div>
      </footer>
</div>
