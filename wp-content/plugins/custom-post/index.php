<?php
/**
 * Created by PhpStorm.
 * User: AntoA
 * Date: 23.01.2018
 * Time: 19:32
 */
/*
Plugin Name: Custom Post plugin
Plugin URI: http://wordpress.org/plugins/
Description: Plugin Post description
Author: Developer
Version: 1
Author URI: http://dev.com
*/

require_once (dirname(__FILE__) . '/Activation.php');
require_once (dirname(__FILE__) . '/CreatePostType.php');


register_activation_hook( __FILE__, array( 'Activation', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Activation', 'deactivate' ) );
register_uninstall_hook( __FILE__, array( 'Activation', 'uninstall' ) );