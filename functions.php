<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');


function enable_more_buttons($buttons) {
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'styleselect';
	$buttons[] = 'backcolor';
	$buttons[] = 'newdocument';
	$buttons[] = 'cut';
	$buttons[] = 'copy';
	$buttons[] = 'charmap';
	$buttons[] = 'hr';
	$buttons[] = 'visualaid';

	return $buttons;
}

add_filter("mce_buttons_3", "enable_more_buttons");

function myformatTinyMCE( $in ) {
	$in['wordpress_adv_hidden'] = FALSE;

	return $in;
}

?>
