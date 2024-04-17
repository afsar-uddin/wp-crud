<?php 

/* * 
Plugin Name: crud
Plugin URI: https://example.com/plugins/the-basics/ 
Description: Basic crud application. 
Version: 0.1
Author: Afsar Uddin 
Author URI: https://author.example.com/ 
License: GPL v2 or later 
icense URI: https://www.gnu.org/licenses/gpl-2.0.html 
Update URI: https://example.com/my-plugin/
Text Domain: my-basics-plugin 
Domain Path: /languages 
*/

foreach ( glob( plugin_dir_path( __FILE__ ) . 'inc/*.php' ) as $file ) {
    require_once $file;
}