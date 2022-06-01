<?php
/*
 * ADD LINE BELOW TO WP-CONFIG.PHP
 * define('ALLOW_UNFILTERED_UPLOADS', true);
 */

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');