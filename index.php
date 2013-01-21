<?php get_header(); ?>
	<div data-role="content" id="content">
		<?php if (is_home()) : ?>
			
			<?php require_once('homepage_banner.php'); ?>
			
			<div class="news-header">Latest news from Pirate Party Australia</div>
			
		<?php endif; ?>
		<div class="news">
          <?php if (have_posts()) : ?>
	  <?php while (have_posts()) : the_post(); get_template_part( 'post' ); endwhile; ?>
	  <?php 
            $newer = get_previous_posts_link('&lsaquo; Newer');
            $older = get_next_posts_link('Older &rsaquo;');
            if ($newer != null || $older != null): ?>

	    <?php if ($newer != null): ?>
	    <div class='newer'><?php echo $newer ?></div>
	    <?php endif; if ($older != null): ?>
	    <div class='older'><?php echo $older ?></div>
            <?php endif; ?>

            <?php endif; ?>
          <?php else: ?>
          <div id="post-0" class="post no-results not-found">
            No results were found for the requested archive. Perhaps searching will help find a related post.
          </div>  
          <?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
