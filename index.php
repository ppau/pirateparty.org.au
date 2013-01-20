<?php get_header(); ?>
	<div data-role="content" id="content">
		<div class="news-header">Latest news from Pirate Party Australia</div>
		<div class="news">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>	
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
