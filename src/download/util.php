<?php

/* A map of version numbers to their codenames */
$version_codenames = array(
	"0.2.0" => "build20b",
	"0.1.3" => "arthur",
	"0.1.0" => "arthur"
);

/* A map of version numbers to their release dates */
$version_dates = array(
	"0.2.0" => mktime(0, 0, 0, 6, 21, 2020),
	"0.1.3" => mktime(0, 0, 0, 6, 13, 2020),
	"0.1.0" => mktime(0, 0, 0, 5, 6, 2020)
);

/* A map of version numbers to the version of the table to use */
$version_tables = array(
	"0.2.0" => 3,
	"0.1.3" => 2,
	"0.1.0" => 1
);

/* The root github project URL */
$github_url = "https://github.com/fidelix-project/fidelix/";

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
	global $version_tables;
	$codename = $version_codenames[$version];
	$table = $version_tables[$version];
	include "download/version_table_v".$table.".php";
}

?>

