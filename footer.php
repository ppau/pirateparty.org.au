<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

				tha_footer_before(); ?>

		</div><!-- #page-row -->

				<footer id="real-footer" role="contentinfo" class="row-fluid centre" style="max-width: 1200px !important; margin: 0 auto;">
					<?php tha_footer_top(); ?>
					
					<div class="centre">
						<div style="display:inline-block;">
							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
						</div>
					</div>
					
					<div class="row-fluid">
						<div class="span6">
							<p>
								Authorised by: B Molloy, Party Secretary, Pirate Party Australia<br>
								Level 26, 44 Market Street, Sydney NSW 2000 Australia
							</p>
						</div>
						<div class="span6">
							<p>
								Copyright © 2013 Pirate Party Australia <a href="http://creativecommons.org/licenses/by/3.0/" rel="license" style="position: relative; top: 3px"><img src="http://i.creativecommons.org/l/by/3.0/80x15.png" style="border-width:0" alt="Creative Commons License"></a><br>
								This work is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">Creative Commons Attribution 3.0 Unported License</a>
							</p>
						</div>
					</div>

					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->


	<script type="text/javascript" src="<?= static_url() ?>js/vendor/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/vendor/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/vendor/fancybox/jquery.fancybox-1.3.4.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/plugins.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/script.js"></script>

	<?php wp_footer(); ?>

</body>
</html>

<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */