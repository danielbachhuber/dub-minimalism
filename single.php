<?php get_header(); ?>

	<div class="wrap">

		<div id="main">
		  
		  <?php get_sidebar(); ?>

		<div id="content">

	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <div class="post" id="post-<?php the_ID(); ?>">
		  
		      <?php
		        if (date('Y') == get_the_time('Y')) {
		          $post_date = get_the_time('M j', $post->ID);
		        } else {
		          $post_date = get_the_time('M j, Y', $post->ID);
		        }
		      ?>
		  
			    <h2><span class="date"><?php echo $post_date; ?></span><?php the_title(); ?></h2>

			    <div class="entry">
				    <?php the_content(); ?>
			    </div>
		
			    <div class="tags"><?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
			    
			    <div id="pagination"><span class="right"><?php next_post_link('%link'); ?></span><span class="left"><?php previous_post_link('%link'); ?></span></div>
		
		    </div>

	      <?php comments_template(); ?>

	    <?php endwhile; else: ?>

      <?php endif; ?>

	  </div>
  
    	<div style="clear:both;"></div>
  
    </div>

  </div>

<?php get_footer(); ?>
