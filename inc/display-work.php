<?php
	// Define array query parameters
    $the_query = new WP_Query( array(
        'cat' => 20,
      ) );
    // The loop
    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


	<div class="row">
		<div class="col-md-12 excerpt list card-wrapper">  
			<div class="card">
			    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  	  	<?php include 'post-details.php'; ?>
		  	  	<hr />
				<?php 
					if ( is_single() ) :
						the_content(); 
					else :
						the_excerpt(__('(more…)')); 
				?>	  	  	
					<a class="button blue raised" href="<?php the_permalink(); ?>">More</a>
				<?php
					endif;
				?>
			</div>
	 	</div>
 	</div>

<?php
	endwhile;

	else:
		echo ('<div class="col-md-12"><h3>No content found</h3></div>');
	endif;
	// Reset data
	wp_reset_postdata(); 
?>
