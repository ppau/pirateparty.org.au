<?php
/** sidebar.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>

<div class="span3 hidden-phone" id="column">
	<section id="secondary" class="widget-area" role="complementary">


				<aside style="padding-bottom: 0px;" class="hidden-phone hidden-tablet">
					<a href="<?php echo join_page_uri() ?>" class="button button-orange sidebar-action-item">
						<i class="icon-is2-group"></i>
						Become a member</a>
				</aside>
				
				<aside style="padding-bottom: 0px;" class="hidden-phone hidden-tablet">
					<a href="<?php echo donate_page_uri() ?>" class="button button-red sidebar-action-item">
						<i class="icon-is2-donate"></i>
						Donate</a>
				</aside>
				
				<aside class="we-are">
					<span>We are</span> a movement based around the core tenets of:
					<ul>
						<li>freedom of information and culture;</li>
						<li>civil and digital liberties;</li>
						<li>privacy and anonymity; and,</li>
						<li>government transparency.</li>
					</ul>
				</aside>


		<?php tha_sidebar_top();
		
		if ( ! dynamic_sidebar( 'main' ) ) {
			the_widget( 'WP_Widget_Archives', array(
				'count'		=>	0,
				'dropdown'	=>	0
			), array(
				'before_widget'	=>	'<aside id="archives" class="widget well widget_archives">',
				'after_widget'	=>	'</aside>',
				'before_title'	=>	'<h3 class="widget-title">',
				'after_title'	=>	'</h3>',
			) );
			the_widget( 'WP_Widget_Meta', array(), array(
				'before_widget'	=>	'<aside id="meta" class="widget well widget_meta">',
				'after_widget'	=>	'</aside>',
				'before_title'	=>	'<h3 class="widget-title">',
				'after_title'	=>	'</h3>',
			) );
		} // end sidebar widget area
		
		tha_sidebar_bottom(); ?>
	</section><!-- #secondary .widget-area -->
</div>
<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */