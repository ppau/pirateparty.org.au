<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

				tha_footer_before(); ?>

		</div><!-- #page-row -->

				<footer id="real-footer" role="contentinfo" class="row-fluid centre">
					<?php tha_footer_top(); ?>
					
					<div class="centre">
						<div id="footer-menu-container" class="footer-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
						</div>
					</div>
					
					<div class="row-fluid">
						<div class="span6">
							<p>
								<small>Authorised by: B Molloy, Party Secretary, Pirate Party Australia<br>
								Level 26, 44 Market Street, Sydney NSW 2000 Australia</small>
							</p>
						</div>
						<div class="span6">
							<p>
								<small>Copyright © 2013 Pirate Party Australia <a href="http://creativecommons.org/licenses/by/3.0/" class="license" rel="license"><img src="http://i.creativecommons.org/l/by/3.0/80x15.png" alt="Creative Commons License"></a><br>
								This work is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">Creative Commons Attribution 3.0 Unported License</a></small>
							</p>
						</div>
					</div>

					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->


	<script type="text/javascript" src="<?= static_url() ?>js/vendor/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= static_url() ?>js/script.js"></script>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-17293608-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

	<?php wp_footer(); ?>

</body>
</html>

<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */