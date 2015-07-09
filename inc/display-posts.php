<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>


	<div class="row">
		<div class="col-md-12 excerpt list">  
	    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  	  	<?php include 'post-details.php'; ?>
  	  	<hr />
	  	  <?php 
	  	  	if ( is_single() ) :
	  	  		the_content(); 
	  	  	else :
	  	  		the_excerpt(__('(more…)')); 
	  	  ?>	  	  	
	  	  <a class="button blue" href="<?php the_permalink(); ?>">Read More</a>
	  	  <?php
	  	  	endif;
	  	  ?>
	 </div>
 	</div>

<?php
	endwhile;

	else:
		echo ('<h3>No content found</h3>');
	endif;
?>
