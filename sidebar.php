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
						Join us
					</a>
						
					<a href="<?php echo donate_page_uri() ?>" class="button button-red sidebar-action-item pig">
						<i class="is2-donate"></i>
						Donate
					</a>
						
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
					
					<p>
						Our weekly show talking pirate politics from the Australian perspective. Hosted by Sam Kearns.
						<a href="<?php echo get_permalink(get_page_by_path('/category/webcasts/')) ?>">Previous episodes and downloads.</a>
					</p>
					
					<div style="background-color: #ddd; margin: 0 10px;padding: 5px;">
						<p class="centre"><strong>Next broadcast</strong></p>
						<p class="centre" style="font-size: 24px;">Sunday 9pm AEST</p>
				</aside>

		<?php tha_sidebar_top();
		
		dynamic_sidebar( 'main' );
		
		tha_sidebar_bottom(); ?>
	</section><!-- #secondary .widget-area -->
</div>
<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */
