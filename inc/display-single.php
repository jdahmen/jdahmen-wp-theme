<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>


	<div class="row">
		<div class="col-md-12 single">  
		    <h1 class="title"><?php the_title(); ?></h1s>
		  	<p>
		  		<?php 
		  			if ( is_single() ) 
		  				include 'post-details.php';
		  	  		if ( is_single() || is_page() ) :
		  	  			the_content(); 
		  	  	?>
		  	</p>
		  	<?php
		  		else :
		  	  		the_excerpt(__('(more…)')); 
		  	?>
		  	</p>
		  	<a class="continued" href="<?php the_permalink(); ?>">Read More</a>
		  		<?php
		  	  		endif;
		  	  	?>
	    	</p>
		</div>
 	</div>

<?php
	endwhile;

	else:
		echo ('<h3>No content found</h3>');
	endif;
?>
