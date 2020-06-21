<?php

include "util.php";
include "download/util.php";

$d_version = "0.2.0";
$d_codename = $version_codenames[$d_version];
$d_prettyname = $d_version . " (" . ucfirst($d_codename) . ")";

do_header("Download - Fidelix Linux");
?>

<h1>System Images</h1>

<p>These are downloadable images that can be used to run, install, and upgrade Fidelix. Mouse over a format for details about it. Click the green button to download the image for the corresponding architecture.</p>

<h2 align=center>Latest Development Version: <?php print($d_prettyname); ?></h2>
<h3 align=center>Released <?php print_release_date($d_version); ?></h3>

<?php
$version = $d_version;
print_version_table($d_version);
?>

<h2 align=center><a align=center href=all.html>All Downloads</a></h2>

<?php do_footer(); ?>

