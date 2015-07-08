<h5>
  	By <a class="author" href="/blog/index.php?author=<?php the_author_ID(); ?>"><?php the_author_nickname(); ?></a> on <?php echo get_the_date('F jS, Y');  ?> 
  	<?php if(has_tag()) {?>
  	-  <?php the_tags(); 
  	}?>
	| <?php comments_number( '0 comments', '1 comment', '% responses' ); ?>
</h5>