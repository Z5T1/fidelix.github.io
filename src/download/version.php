<?php

include "util.php";
include "download/util.php";

if ( count($argv) != 2 ) {
	print("Usage: $argv[0] <VERSION>");
	exit;
}

$version = $argv[1];
$codename = $version_codenames[$version];
$prettyname = $version . " (" . ucfirst($codename) . ")";

do_header("Download - Fidelix Linux");
?>

<h1 align=center>Download Fidelix <?php print($prettyname); ?></h1>
<h2 align=center>Released <?php print_release_date($version); ?></h3>

<?php
print_version_table($version);
?>

<h2 align=center><a align=center href=all.html>All Downloads</a></h2>

<?php do_footer(); ?>

