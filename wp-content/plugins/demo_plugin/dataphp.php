<?php
/*
Plugin Name: curency-demo
Plugin URI: http://yourdomain.com/
Description: A simple hello world wordpress plugin
Version: 1.0
Author: Balakrishnan
Author URI: http://yourdomain.com
License: GPL
*/

/* This calls hello_world() function when wordpress initializes.*/


?>
<?php
function pro_admin_list_site()
{
	 include 'demo_plugin.php';
}
?>
<?php
/* Runs when plugin is activated */
register_activation_hook(__FILE__,'curency_demo_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'curency_demo_remove' );

function hello_world_install() {
/* Creates new database field */
add_option("curency_demo_data", 'Default', '', 'yes');
}

function hello_world_remove() {
/* Deletes the database field */
delete_option('curency_demo_data');
}

?>
