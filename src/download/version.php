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
$baseurl = "https://github.com/z5t1/fidelix/releases/download/";

function get_download_url($arch, $format) {
	global $version;
	global $codename;
	global $baseurl;
	return $baseurl.$version."/fidelix-".$version."-".$arch."-".$codename.$format;
}

function print_download_link($arch, $format) {
	print("<div class=downloadlink><a href=\"".get_download_url($arch, $format)."\">&nbsp;&#x21e9;&nbsp;</a></div>\n");
}

do_header("Download - Fidelix Linux");
?>

<h1 align=center>Download Fidelix <?php print($prettyname); ?></h1>

<table>
	<tr>
		<th>Format</th>
		<th>x86_64</th>
	</tr>
	<tr>
		<td>Full Disk Image (img.gz)</td>
		<td><?php print_download_link("x86_64", ".img.gz"); ?></td>
	</tr>
	<tr>
		<td>CD Image (iso)</td>
		<td><?php print_download_link("x86_64", ".iso"); ?></td>
	</tr>
	<tr>
		<td>Source &amp; Packages (src+pkgs.tar.gz)</td>
		<td><?php print_download_link("x86_64", "-src+pkgs.tar.gz"); ?></td>
	</tr>
</table>

<h2 align=center><a align=center href=all.html>All Downloads</a></h2>

<?php do_footer(); ?>

