<div id="sidebar">
	<div class="row">
		<div class="col-md-12">
			<div class="well search-well">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>Categories</h3>
			<div class="well categories">
				<?php wp_list_categories('orderby=name&title_li='); ?> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>Tags</h3>
			<div class="well tags"><?php $tags = get_tags();
				$html = '<div class="post_tags">';
				foreach ( $tags as $tag ) {
					$tag_link = get_tag_link( $tag->term_id );
							
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' >";
					$html .= "{$tag->name}</a>";
					$html .= "<br />";
				}
				$html .= '</div>';
				echo $html; ?>
			</div>
		</div>
	</div>
</div>