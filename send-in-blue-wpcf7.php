<?php
/**
 * @package SendinBlue_CF7
 * @version 1
 */
/*
Plugin Name: SendinBlue Opt-in checkbox for Contact Form 7
Description: Add a SendinBlue subscription Opt-in checkbox to Contact Form 7
Author: E.R. Ellsworth
Plugin URI: https://erellsworth.com/wordpress
Version: 1
Author URI: https://erellsworth.com
*/

define('EE_SIB_CF7_PATH', dirname(__FILE__));

require_once EE_SIB_CF7_PATH . '/sendinblue.php';

$SendinBlue_CF7 = new SendinBlue_CF7();

register_activation_hook( __FILE__, array('SendinBlue_CF7', 'activate'));

add_action('plugins_loaded', array($SendinBlue_CF7, 'init'));	