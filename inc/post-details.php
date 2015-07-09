<h5>
  	By <a class="author" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_nickname(); ?></a> on <?php echo get_the_date('F jS, Y');  ?> 
  	<?php if(has_tag()) {?>
  	-  <?php the_tags(); 
  	}?>
	| <?php comments_number( '0 comments', '1 comment', '% responses' ); ?>
</h5>