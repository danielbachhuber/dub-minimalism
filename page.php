<?php get_header(); ?>

<div class="wrap">
	
	<div id="main">

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page" id="page-<?php the_ID(); ?>">
			
		  <h2><?php the_title(); ?></h2>
		
			<div class="entry">
				<?php the_content(); ?>
			</div>
			
		</div>
		<?php endwhile; endif; ?>
		
	</div>

</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
