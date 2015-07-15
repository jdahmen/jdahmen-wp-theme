<form action="<?php bloginfo('siteurl'); ?>" method="get" id="search">
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search"/>
	<input type="submit" value="&rarr;" alt="Search">
</form>