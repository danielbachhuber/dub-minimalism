<?php get_header(); ?>

<div class="wrap">
	
	<div id="main">
	  
	  <?php get_sidebar(); ?>

	<div id="content">

		<h2 class="page_title">Tagged '<?php single_tag_title(); ?>'</h2>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post_<?php the_ID(); ?>">
			  
			  <?php
  		    if (date('Y') == get_the_time('Y')) {
  		      $post_date = get_the_time('M j', $post->ID);
  		    } else {
  		      $post_date = get_the_time('M j, Y', $post->ID);
  		    }
  		  ?>
			  
				<h2><span class="date"><?php echo $post_date; ?></span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

				<div class="tags"><?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
				
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2>Not found</h2>

	<?php endif; ?>
	
	  <div id="pagination"><span class="right"><?php previous_posts_link('Newer Posts'); ?></span><span class="left"><?php next_posts_link('Older Posts'); ?></span></div>

	</div>

  </div><!-- /main -->
  
</div><!-- /wrap -->

<?php get_footer(); ?>
