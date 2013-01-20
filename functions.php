<?php 
require_once('twitter_bootstrap_nav_walker.php');

$themename= 'Pirate Party Australia';

register_nav_menus(array(
	'primary_left' => __( 'Main Menu Left', $themename ),
	'primary_right' => __( 'Main Menu Right', $themename ),
));

function static_url()
{
	return get_template_directory_uri() . '/static/';
}
?>
