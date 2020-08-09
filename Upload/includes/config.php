<?php

// Main website configuration options

$site_config = array(
	'website_url' => 'http://emberthemes.net/demo/bitcointx',
	'website_name' => 'SpeedyTx',
	'default_title' => 'Bitcoin transaction accelerator',
	'default_description' => 'Website Description',
	'default_keywords' => 'Website Keywords',
	'default_image' => 'img.png'
	);

$btc = array(
	'address' => '1NvUFveJtV19Pt3WKoBg4SVmRtQr6KogFd'
);

//////////////////////////////////////////////////////////////////////////
// Important stuff, don't change unless you know what you are doing!!! //
////////////////////////////////////////////////////////////////////////

// Allow getting the version number for support reasons

if(isset($_GET['version'])) {
	echo 'v1.0';
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
