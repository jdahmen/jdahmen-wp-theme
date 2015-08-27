<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>


	<div class="row">
		<div class="col-md-12 single card-wrapper">
			<div class="card">
				<?php 
					if ( is_single() ): ?>
					<h1 class="title"><?php the_title(); ?></h1>	  	
		  		<?php 
		  				include 'post-details.php';
		  			endif;
		  	  		if ( is_single() || is_page() ) {
		  	  			echo '<p>';
		  	  			the_content(); 
		  	  			echo '</p>';
		  	  		}
			  		else {
			  			echo '<p>';
			  	  		the_excerpt(__('(more…)'));
		  	  			echo '</p>';
		  	  			echo '<a class="continued" href="<?php the_permalink(); ?>">Read More</a>';
			  	  	}
		  		?>
		    	</p>
		    </div>
		</div>
 	</div>

<?php
	endwhile;

	else:
		echo ('<h3>No content found</h3>');
	endif;
?>
