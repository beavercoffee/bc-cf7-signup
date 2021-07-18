<?php
/*
Author: Beaver Coffee
Author URI: https://beaver.coffee
Description: Sign up with Contact Form 7.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: BC CF7 Signup
Plugin URI: https://github.com/beavercoffee/bc-cf7-signup
Requires at least: 5.7
Requires PHP: 5.6
Text Domain: bc-cf7-signup
Version: 1.7.18.1
*/

if(defined('ABSPATH')){
    require_once(plugin_dir_path(__FILE__) . 'classes/class-bc-cf7-signup.php');
    BC_CF7_Signup::get_instance(__FILE__);
}
