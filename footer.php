
			</div>
			<div class="span3 hidden-phone" id="column">

				<aside style="padding-bottom: 0px;">
					<a href="#" class="button button-orange button-become-a-member">Become a member</a>
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
	
				<aside>
					<header>Webcast</header>
					<p>Enthusiastic talkback-style webcast discussing Pirate Politics from an Australian perspective. Presented by Sam Kearns.</p>
					<p style="overflow:auto;height:40px;padding-top: 10px;">
						<strong>Episode 1</strong>
						
						<audio controls style="float: right; width:200px;">
							
						</audio>
					</p>
					<p class="last">Subscribe to the feed here, or view past episodes.</p>
				</aside>
				
				<aside>
					<header>Donate</header>
					<form class="block form-inline" method="POST" action="http://lists.pirateparty.org.au/mailman/subscribe/general">
						<div class="control inline">
							<label for="amount" style="width:70px;text-align:right;margin-right:10px;"><strong>Amount:</strong></label>
							<select id="amount" name="amount" style="width: 160px;">
								<option value="5">$5</option>
								<option value="10">$10</option>
								<option value="25">$25</option>
								<option value="50">$50</option>
								<option value="75">$75</option>
								<option value="100">$100</option>
								<option value="other">Other</option>
							</select>
						</div>
						
						<div id="other_amount" class="control inline" style="margin: 15px 0;">
							<label for="amount" style="width:70px;text-align:right;margin-right:10px;"><strong></strong></label>
							
							<div class="input-prepend">
								<span class="add-on">$</span>
								<input type="text" name="other_amount" placeholder="Enter amount..." style="width: 119px !important;">
							</div>
						</div>

						<div class="control inline" style="margin: 15px 0;">
							<label style="width:70px;text-align:right; float:left;" class="radio inline"><strong>Type:</strong></label>
							
							<label for="once" class="radio inline" style="line-height: 25px; margin-left: 100px; float:left;">Once-off
								<input type="radio" id="once" name="schedule" value="once" checked="checked">
							</label>
							
							<label for="monthly" class="radio inline" style="line-height: 25px; margin-left: 100px; float:left;">Monthly
								<input type="radio" id="monthly" name="schedule" value="monthly">
							</label>
						</div>
						<p style="text-align: center;">
							<button type="submit" class="btn btn-primary btn-large">Donate now!</button>
						</p>
						
					</form>
				</aside>
				
				<aside>
					<header>Mailing List</header>
					<form class="block form-inline" method="POST" action="http://lists.pirateparty.org.au/mailman/subscribe/general">
						<div class="control-group">
							<div class="control">
								<input style="width: 100%" placeholder="Enter an email address here..." name="email">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Subscribe</button>
					</form>
				</aside>


		</div>
	</div>

	<footer>

	</footer>

	<script defer src="<?= static_url() ?>js/vendor/jquery-1.8.2.min.js"></script>
	<script defer src="<?= static_url() ?>js/vendor/bootstrap.min.js"></script>
	<script defer src="<?= static_url() ?>js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script defer src="<?= static_url() ?>js/vendor/superfish.js"></script>
	<script defer src="<?= static_url() ?>js/plugins.js"></script>
	<script defer src="<?= static_url() ?>js/script.js"></script>

	<?php wp_footer(); ?>

</body>
</html>
