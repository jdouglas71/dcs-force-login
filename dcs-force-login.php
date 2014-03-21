<?php
/*
Plugin Name: DCS-Force-Login
Plugin URI: http://douglasconsulting.net/
Description: A force login wordpress plugin
Version: 1.0
Author: Jason Douglas
Author URI: http://douglasconsulting.net
License: GPL
*/

/**
 * Force login for the site.
 */
function dcs_forceLogin()
{
	if( !is_user_logged_in() )
	{
		wp_redirect( site_url('/wp-login.php') );
		exit;
	}
}
add_action( 'get_header', 'dcs_forceLogin' );
