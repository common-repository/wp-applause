<?php
/*
 * Plugin Name: WP APPLAUSE BUTTON PLUGIN
 * Description: Add this applause button to your website so users can like your content by clapping. Simply paste this shortcode where you want the applause button to appear: [wp-applause-button]
 * Author: APPLAUSEPLUGIN.COM
 * Author URI: https://applauseplugin.com
 * Plugin URI: https://applauseplugin.com
 * Version: 1.0.4
 */

define('WP_Applause_Button_URL',plugins_url('',__FILE__));

require_once dirname(__FILE__) . '/includes/class-wp-applause-core.php';