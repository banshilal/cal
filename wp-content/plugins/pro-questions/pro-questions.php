<?php
/*
Plugin Name: Plugin Tutorial
Plugin URI: http://www.pro-questions.com
Description: Wordpress plugin tutorial
Author: Pro Question
Version: 1.0.1
Author URI: http://pro-questions.com
*/
?>
<?php
//Add ShortCode for "front end listing"
add_shortcode("pro_tutorial_site_listing","pro_tutorial_site_listing_shortcode");
 function pro_tutorial_site_listing_shortcode($atts) 
{ 
	  include 'admin-list-site.php';
}
?>