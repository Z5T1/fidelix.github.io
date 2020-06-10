<?php

/* A map of version numbers to their codenames */
$version_codenames = array(
	"0.1.0" => "arthur"
);

/* A map of version numbers to their release dates */
$version_dates = array(
	"0.1.0" => mktime(0, 0, 0, 5, 6, 2020)
);

/* The root github project URL */
$github_url = "https://github.com/z5t1/fidelix/";

/* The root of the github tree to download from */
$download_site_url = $github_url."releases/download/";

function print_release_date($version) {
	print(get_release_date($version));
}

function get_release_date($version) {
	global $version_dates;
	return date('F j, Y', $version_dates[$version]);
}

function print_version_table($version) {
	global $version_codenames;
	$codename = $version_codenames[$version];
	include "download/version_table.php";
}

?>

