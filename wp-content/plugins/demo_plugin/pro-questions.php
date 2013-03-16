<?php
//Add ShortCode for "front end listing"
add_shortcode("pro_tutorial_site_listing","pro_tutorial_site_listing_shortcode");
 function pro_tutorial_site_listing_shortcode($atts) 
{ 
	  include 'demo_plugin.php';
}
?>