<?php
/** search.php
 *
 * The template for displaying Search Results pages.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>


	<?php tha_content_before(); ?>
<div class="span9" data-role="page" id="page">
		<?php tha_content_top();
		
		if ( have_posts() ) : ?>
	
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'the-bootstrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
	
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif; 
	
		tha_content_bottom(); ?>
	<?php tha_content_after(); ?>
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file search.php */
/* Location: ./wp-content/themes/the-bootstrap/search.php */