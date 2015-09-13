<div class="row">
	<div class="col-md-12 archive-wrapper">
		<h1>			
			<?php
				if ( is_category() ) {
					single_cat_title();
				} elseif ( is_tag() ) {
					single_tag_title();
				} elseif ( is_author() ) {
					the_post();
					echo 'By Author: ';
					the_author_nickname();
					rewind_posts();
				} elseif ( is_day() ) {
					echo 'Daily Archives: ' . get_the_date('F jS, Y');
				} elseif ( is_month() ) {
					echo 'Monthly Archivies: ' . get_the_date('F Y');
				} elseif ( is_year() ) {
					echo 'Yearly Archives: ' . get_the_date('Y');
				} else {
					echo 'Archives: ';
				}
			?>
		</h1>
	</div>
</div>

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
		echo ('<div class="col-md-12"><h3>No content found</h3></div>');
	endif;
?>
