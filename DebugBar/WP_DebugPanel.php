<?php
namespace wpplex\WP_DebugBar\debugbar;

// Exit if the Parent Class is not defined
if ( ! class_exists( '\Debug_Bar_Panel' ) ) {
	return;
}

/**
 * Class for Debugging and Displaying various 
 * information about the plugin. 
 *
 * @package     Utils 
*/
class WP_DebugPanel extends \Debug_Bar_Panel {	
	public function init() {
		$this->title( 'BP Info' );	
	}
	public function prerender() {
		$this->set_visible( is_admin() );
	}
	public function render() {	
		$constants = WPBP()->defined_constants;	
		include_once( 'views/view-main.php' );
	}
}
