<form action="<?php bloginfo('siteurl'); ?>" method="get" id="search">
	<div class="action-wrapper">
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>"/>
		<label>Search Site</label>
	</div>
	<!-- <div class="action-wrapper">
		<input type="submit" value="&rarr;" alt="Search">
	</div> -->
</form>