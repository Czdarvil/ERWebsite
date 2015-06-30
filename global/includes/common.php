<?php
define('ROOT_DIR', dirname( dirname( __FILE__ ) ) );
define('PARTIALS_DIR', ROOT_DIR . '/partials' );

/**
 * Gets header or footer from root directory
 */
function get_header() {
	if ( file_exists( ROOT_DIR . '/header.php' ) ) {
		include_once( ROOT_DIR . '/header.php' );
	}
}
function get_footer() {
	if ( file_exists( ROOT_DIR . '/footer.php' ) ) {
		include_once( ROOT_DIR . '/footer.php');
	}
}


/**
 * Return partial from partials folder
 */
function get_partial($partials_name) {
	include(locate_partial($partials_name));
}

function locate_partial($partials_name) {
	if (file_exists( PARTIALS_DIR . '/' . $partials_name)) {
		return PARTIALS_DIR . '/' . $partials_name;
	}
}
