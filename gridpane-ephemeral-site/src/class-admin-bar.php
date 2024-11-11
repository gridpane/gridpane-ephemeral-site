<?php
namespace GridPane\EphemeralSite;
/**
 * Class GridPane_Ephemeral_Admin_Bar
 */
class GridPane_Ephemeral_Admin_Bar {
	protected $config;

	public function __construct( array $config ) {
		$this->config = $config;
	}

	public function init() {
		add_action( 'admin_bar_menu', [ $this, 'add_admin_bar_notice' ], 9999 );
		add_action( 'admin_bar_init', [ $this, 'render_admin_bar_css' ], 9999 );
	}

	public function add_admin_bar_notice() {
		if ( ! is_admin_bar_showing() ) {
			return;
		}
		global $wp_admin_bar;

		$admin_notice = [
			'parent' => 'root-default',
			'id'     => 'ephemeral-notice',
			'title'  => sprintf( '<span class="adminbar--ephemeral-notice">%s</span>', $this->config['message'] ),
		];

		$wp_admin_bar->add_menu( $admin_notice );
	}


	public function render_admin_bar_css() {
		if ( ! is_admin_bar_showing() ) {
			return;
		}

		$css =
			'
			.adminbar--ephemeral-notice {
				color: #fff;
			}
							
			@media only screen and ( min-width: 800px ) {
				#wp-admin-bar-ephemeral-notice {
					display: block;
				}
		
				#wp-admin-bar-ephemeral-notice .ab-item {
					background-color: %s !important;
				}
		
				#wp-admin-bar-ephemeral-notice:hover .ab-item {
					background-color: %s !important;
					color: #fff;
				}
			}
			';

		$css = vsprintf( $css, $this->config['colors'] );

		wp_add_inline_style( 'admin-bar', $css );
	}
}
