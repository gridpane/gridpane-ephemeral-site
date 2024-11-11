<?php
/**
 * Admin Bar Runtime Configuration Parameters.
 *
 * @package     GridPane\EphemeralSite;
 */
namespace GridPane\EphemeralSite;

$GRIDPANE_EPHEMERAL_DURATION = 'UNDEFINED';
if ( defined( 'GRIDPANE_EPHEMERAL_DURATION' )) {
	$GRIDPANE_EPHEMERAL_DURATION = GRIDPANE_EPHEMERAL_DURATION;
}

$GRIDPANE_EPHEMERAL_BUILD = 'UNDEFINED';
if ( defined( 'GRIDPANE_EPHEMERAL_BUILD' )) {
	$GRIDPANE_EPHEMERAL_BUILD = GRIDPANE_EPHEMERAL_BUILD;
}

return [
	'message'      => 'GridPane Ephemeral Site - ' . 'Lifespan ' . $GRIDPANE_EPHEMERAL_DURATION . ' Hours - Built ' . $GRIDPANE_EPHEMERAL_BUILD,
	'colors'       => [
		'message_background_color'   => '#00845A',
		'message_hover_color'        => '#00845A',
	],
	'css_file'     => _get_plugin_root_dir() . '/assets/css/admin-bar.php',
];
