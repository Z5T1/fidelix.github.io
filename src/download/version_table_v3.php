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

function print_no_link() {
	print("<div class=nodownloadlink><a title='Unsupported'>&nbsp;&#x1f5d9;&nbsp;</a></div>\n");
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
	<th><a href=<?php print(get_github_url()."/blob/".$version."/images/README.md"); ?>>Format</a></th>
		<th>aarch64</th>
		<th>i686</th>
		<th>x86_64</th>
	</tr>
	<tr>
		<td title="Gzipped raw disk images containing a full system image, the source tree, and the binary packages. They can be used as a bootable disk image or dd'ed over to a USB flash drive/SD card. Once booted, they can also be used to install the system to another disk.">Full Disk Image (img.gz)</td>
		<td><?php print_no_link(); ?></td>
		<td><?php print_download_link("i686", ".img.gz"); ?></td>
		<td><?php print_download_link("x86_64", ".img.gz"); ?></td>
	</tr>
	<tr>
		<td title="Bootable ISO9660 CD-ROM images containing a minimal system image, the source tree, and the binary packages. They can be written to a DVD and used as both a live CD and an installer.">CD Image (iso)</td>
		<td><?php print_no_link(); ?></td>
		<td><?php print_download_link("i686", ".iso"); ?></td>
		<td><?php print_download_link("x86_64", ".iso"); ?></td>
	</tr>
	<tr>
		<td title="A tar archive containing the binary packages, suitable for extracting to /var.">Packages (pkgs.tar.gz)</td>
		<td><?php print_download_link("aarch64", "-pkgs.tar.gz"); ?></td>
		<td><?php print_download_link("i686", "-pkgs.tar.gz"); ?></td>
		<td><?php print_download_link("x86_64", "-pkgs.tar.gz"); ?></td>
	</tr>
	<tr>
		<td title="A tar archive containing a complete root filesystem (but no kernel or bootloader). Useful for chroot environments or installing to systems that already have a bootloader and kernel (such as embedded platforms). Do NOT extract with GNU tar or BusyBox tar; use BSD tar.">Root Filesystem (rootfs.tar.gz)</td>
		<td><?php print_download_link("aarch64", "-rootfs.tar.gz"); ?></td>
		<td><?php print_download_link("i686", "-rootfs.tar.gz"); ?></td>
		<td><?php print_download_link("x86_64", "-rootfs.tar.gz"); ?></td>
	</tr>
	<tr>
		<td title="A tar archive containing a minimal root filesystem (only essential packages; no kernel or bootloader). Useful for small chroot environments and containers. Also useful for installing to systems that already have a bootloader and kernel and have limited disk space (such as embedded platforms). Supports installing binary packages, but not building from source. Do NOT extract with GNU tar or BusyBox tar; use BSD tar.">Minimal Root Filesystem (rootfs.tar.gz)</td>
		<td><?php print_download_link("aarch64", "-minirootfs.tar.gz"); ?></td>
		<td><?php print_download_link("i686", "-minirootfs.tar.gz"); ?></td>
		<td><?php print_download_link("x86_64", "-minirootfs.tar.gz"); ?></td>
	</tr>
</table>

