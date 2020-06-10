<?php

$prettyname = $version . " (" . ucfirst($codename) . ")";

function get_download_url($arch, $format) {
	global $version;
	global $version_codenames;
	$codename = $version_codenames[$version];
	global $download_site_url;
	return $download_site_url.$version."/fidelix-".$version."-".$arch."-".$codename.$format;
}

function get_github_url() {
	global $github_url;
	return $github_url;
}

function print_download_link($arch, $format) {
	print("<div class=downloadlink><a href=\"".get_download_url($arch, $format)."\">&nbsp;&#x21e9;&nbsp;</a></div>\n");
}
?>

<table>
	<tr>
		<td><a href=<?php print(get_github_url()."/archive/".$version.".tar.gz"); ?>>Source</a></td>
		<td><a href=<?php print(get_github_url()."/blob/".$version."/doc/install.md"); ?>>Installation Guide</a></td>
		<td><a href=<?php print(get_github_url()."/releases/tag/".$version); ?>>Release on GitHub</a></td>
		<td><a href="hashes/<?php print($version); ?>-sha256sums">SHA256 Hashes</a></td>
	</tr>
</table>

<table>
	<tr>
		<th>Format</th>
		<th>i686</th>
		<th>x86_64</th>
	</tr>
	<tr>
		<td title="Gzipped raw disk images containing a full system image, the source tree, and the binary packages. They can be used as a bootable disk image or dd'ed over to a USB flash drive/SD card. Once booted, they can also be used to install the system to another disk.">Full Disk Image (img.gz)</td>
		<td><?php print_download_link("i686", ".img.gz"); ?></td>
		<td><?php print_download_link("x86_64", ".img.gz"); ?></td>
	</tr>
	<tr>
		<td title="Bootable ISO9660 CD-ROM images containing a minimal system image, the source tree, and the binary packages. They can be written to a DVD and used as both a live CD and an installer.">CD Image (iso)</td>
		<td><?php print_download_link("i686", ".iso"); ?></td>
		<td><?php print_download_link("x86_64", ".iso"); ?></td>
	</tr>
	<tr>
		<td title="Tarballs of /usr/src containing the full source tree and the binary packages.">Source &amp; Packages (src+pkgs.tar.gz)</td>
		<td><?php print_download_link("i686", "-src+pkgs.tar.gz"); ?></td>
		<td><?php print_download_link("x86_64", "-src+pkgs.tar.gz"); ?></td>
	</tr>
</table>

