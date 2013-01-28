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


				<div id="join-donate" style="padding-bottom: 0px;" class="hidden-phone hidden-tablet">
					<a href="<?php echo join_page_uri() ?>" class="button button-orange sidebar-action-item">
						<i class="is2-group"></i>
						Join us</a>
						
					<a href="<?php echo donate_page_uri() ?>" class="button button-red sidebar-action-item">
						<i class="is2-donate"></i>
						Donate</a>
						
				</div>
				
				
				<aside class="we-are">
					<span>We are</span> a movement based around the core tenets of:
					<ul>
						<li>freedom of information and culture;</li>
						<li>civil and digital liberties;</li>
						<li>privacy and anonymity; and,</li>
						<li>government transparency.</li>
					</ul>
				</aside>

				<aside>
					<header>Pirate Party TV</header>
					
					<p>Our weekly show talking pirate politics from the Australian perspective. Hosted by Sam Kearns.</p>
					
					<div style="background-color: #ddd; margin: 0 10px;padding: 5px;">
						<p class="centre"><strong>Next broadcast</strong>: Sunday 9pm AEST</p>
	
						<div id="clock">
						  <p>
						    <span id="daysLeft"></span>
						    days
						  </p>
						  <p>
						    <span id="hours"></span>
						    hours
						  </p>
						  <p>
						    <span id="minutes"></span>
						    mins
						  </p>
						  <p>
						    <span id="seconds"></span>
						    secs
						  </p>
						</div>
					</div>
					<div class="centre" style="background-color: #ddd; margin: 0 10px;padding: 5px;">
						<a href="#" class="btn btn-primary btn-large">Live now!</a>
					</div>
					
					
					<div id="ppautv-player"><a href="#" class="btn btn-primary">Watch latest episode</a></div>
					<p class="centre"><a href="#" class="btn btn-primary">previous episodes</a></p>
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
