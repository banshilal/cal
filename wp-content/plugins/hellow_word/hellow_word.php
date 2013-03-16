<?php
/*
Plugin Name: Hello-World
Plugin URI: http://yourdomain.com/
Description: A simple hello world wordpress plugin
Version: 1.0
Author: Balakrishnan
Author URI: http://yourdomain.com
License: GPL
*/

/* This calls hello_world() function when wordpress initializes.*/

add_action('init','hello_world');
function hello_world()
{
echo "Hello";
//include('demo5.php');
}
?>
<?php
/* Runs when plugin is activated */
register_activation_hook(__FILE__,'hello_world_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'hello_world_remove' );

function hello_world_install() {
/* Creates new database field */
add_option("hello_world_data", 'Default', '', 'yes');
}

function hello_world_remove() {
/* Deletes the database field */
delete_option('hello_world_data');
}

?>
