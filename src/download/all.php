<?php

include "util.php";
include "download/util.php";

do_header("Download - Fidelix Linux");
?>

<h1>All Downloads</h1>

<p>These are the links to the download pages for every version of Fidelix. Note that many of these versions are no longer supported and known to contain security vulnerabilities. For the latest supported versions, see the <a href=/download>latest downloads</a>.</p>

<ul>

<?php
foreach ($version_codenames as $version => $codename) {
	print("<li><a href=$version.html>$version ($codename): released ".get_release_date($version)."</a></li>\n");
}
?>

</ul>

<?php do_footer(); ?>

