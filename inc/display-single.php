<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); 
?>
	
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

<?php
	endwhile;

	else:
		echo ('<h3>No content found</h3>');
	endif;
?>
