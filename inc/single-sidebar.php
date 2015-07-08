<h3>Tags</h3>
<div class="well"><?php $tags = get_tags();
	$html = '<div class="post_tags">';
	foreach ( $tags as $tag ) {
		$tag_link = get_tag_link( $tag->term_id );
				
		$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
		$html .= "{$tag->name}</a>";
	}
	$html .= '</div>';
	echo $html; ?>
</div>