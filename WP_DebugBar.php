<?php
namespace wpplex\WP_DebugBar;

/**
 * Class for Debugging and Displaying various 
 * information about the plugin. 
 *
 * @package     Utils 
*/
class WP_DebugBar {
	public function __construct() {
		// Add an info Tab to the Debug Bar
		add_filter( 'debug_bar_panels', array( &$this, 'debug_bar_info_panel' ) );
	}

	public function debug_bar_info_panel( $panels ) {	
		$panel = new debugbar\WP_DebugPanel();		
		$panels[] = $panel;

		return $panels;
	}
}
