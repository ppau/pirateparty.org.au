<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php the_title(); ?> - Pirate Party Australia2</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width">

	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	
	<script src="<?= static_url() ?>js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
	<link rel="shortcut icon" href="/favicon.ico"/>
	
	<?php wp_head(); ?>

</head>

<body>

	<div class="row-fluid">
		<div class="span12">
			<header>
				<div id="header">
					<a id="logo" href="<?php echo site_url(); ?>">
						pirate<span>party</span><br>
						<span class="oz">australia</span>
					</a>
	
					<div id="search" class="hidden-phone">
						<form id="id_search_form" method="post" action="/search/" style="padding: 0;">
							<input type="text" class="input-medium field-search notext" name="query" placeholder="Enter search terms here...">
							<input type="submit" class="btn" value="search" name="submit">
						</form>
	
						<div id="social">
							<span>Connect with us<br></span>
							<a href="https://www.facebook.com/piratepartyau"><img src="<?= static_url() ?>img/icons/social/facebook_32.png"></a>
							<a href="https://twitter.com/piratepartyau"><img src="<?= static_url() ?>img/icons/social/twitter_32.png"></a>
							<a href="https://plus.google.com/u/0/b/114061517635295816057/114061517635295816057/posts"><img src="<?= static_url() ?>img/icons/social/google_plus_32.png"></a>
							<a href="http://www.youtube.com/user/PiratePartyAu"><img src="<?= static_url() ?>img/icons/social/youtube_32x32.png"></a>
							<a href="http://pirateparty.org.au/feed"><img src="<?= static_url() ?>img/icons/social/rss_32.png"></a>
						</div>
					</div>
				</div>
			</header>
		</div>
	</div>





		<div class="navbar ppau-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button" style="margin-bottom: 5px; float: left !important; color: #222; text-shadow: none !important;">
						<i class="icon-th-list"></i> menu
					</button>
					<a href="#" class="hidden-desktop btn btn-warning pull-right" style="padding: 7px 10px; font-weight: bold; margin-right: 5px;font-size: 14px; line-height: 20px;">Join us</a>
					<div class="nav-collapse collapse">
						
<?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => 'navigation',
	'container'       => 'ul',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'nav',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => new twitter_bootstrap_nav_walker()
);
?>
						<?php wp_nav_menu($defaults); ?>
						
						<ul id="menu-action" class="sf-menu hidden-phone hidden-tablet">
							<li><a href="#" class="action left">Join us!</a></li>
							<li><a href="#" class="action right">Help us!</a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>






		<div id="page-row" class="row-fluid" style="max-width: 1200px !important; margin: 0 auto;">
			<div class="span9" data-role="page" id="page">

