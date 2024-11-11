<?php
namespace GridPane\EphemeralSite;
/**
 * Set up the plugin.
 *
 * @since  1.0.0
 * @access private
 */
function _setup_plugin() {
	_setup_admin_bar();
}

/**
 * Set up the Admin Bar.
 *
 * @since  1.0.0
 * @access private
 */
function _setup_admin_bar() {
	require_once __DIR__ . '/class-admin-bar.php';

	/**
	 * Filter the admin bar configuration parameters.
	 *
	 * @since 1.0.0
	 *
	 * @param array $config Array of configuration parameters.
	 */
	$config = apply_filters( 'gridpane_ephemeral_site_admin_bar_config', (array) require _get_plugin_root_dir() . '/config/admin-bar.php' );

	( new GridPane_Ephemeral_Admin_Bar( $config ) )->init();
}

