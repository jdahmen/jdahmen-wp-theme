<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>


	<div class="row">
		<div class="col-md-12">  
	    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  	  	<?php include 'post-details.php'; ?>
	  	<p>
	  	  <?php 
	  	  	if ( is_single() ) :
	  	  		the_content(); 
	  	  ?>
	  	  	</p>
	  	  <?php
	  	  	else :
	  	  		the_excerpt(__('(more…)')); 
	  	  ?>
	  	  	</p>
	  	  	<a class="button" href="<?php the_permalink(); ?>">Keep reading</a>
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
