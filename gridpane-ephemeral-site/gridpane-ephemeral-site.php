<?php
namespace GridPane\EphemeralSite;
/**
 * Gets the plugin's root directory.
 *
 * @since 1.0.0
 * @access private
 *
 * @return string
 */
function _get_plugin_root_dir() {
	return __DIR__;
}

require_once __DIR__ . '/src/setup.php';

_setup_plugin();
