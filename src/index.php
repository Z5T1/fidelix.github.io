<?php
include "util.php";
do_header("Fidelix Linux");
?>

<div class=post>

<h1>2020-06-28: Fidelix 0.2.0 has been released</h1>

<p>
Fidelix 0.2.0 is now <a href=download/0.2.0.html>available for download</a>.
Here is a list of notable changes since Fidelix 0.1.3 (this list is not
exhaustive):
</p>

<ul>
	<li>aarch64 port</li>
	<li>OpenNTPD 6.3p1</li>
	<li>LibreSSL 3.1.3</li>
	<li>Slightly better pkgsrc support</li>
	<li>Many miscellaneous bug fixes</li>
	<li>Binary package tree moved out of /usr/src to /var/packages</li>
	<li>Separate source and package tarball downloads</li>
	<li>Rootfs and Minirootfs tarball downloads</li>
</ul>

<p>Breakage Notices:</p>

<ul>
	<li>LibreSSL 3.0.2 -&gt; 3.1.3 has an ABI breakage. Any third party binaries linked against LibreSSL will need to be recompiled. If you cannot recompile them easily, then the recommended course of action is to keep the libressl-3.0.2 package installed along side libressl-3.1.3.</li>
</ul>

</div>

<div class=post>

<h1>2020-06-13: Fidelix 0.1.3 has been released</h1>

<p>
Fidelix 0.1.3 is now available for download. Here is a list of notable changes
since Fidelix 0.1.0 (this list is not exhaustive):
</p>

<ul>
	<li>i686 port</li>
	<li>nginx</li>
	<li>OpenSSH upgraded from 8.2p1 to 8.3p1</li>
	<li>GCC upgraded from 9.2.0 to 9.3.0</li>
	<li>Experimental pkgsrc support.</li>
	<li>Several miscellaneous bug fixes.</li>
</ul>

<p>
Fun facts about this release:
</p>

<ul>
	<li>The i686 port took 28 days of work to successfully bootstrap. This was the primary focus of this release.</li>
	<li>/usr/src has support for exactly 42 packages in this release.</li>
</ul>
<p>
</div>

<div class=post>

<h1>2020-05-31: nginx has Landed in Master; i686 Port is Underway</h1>

<p>
I am please to announce that <a href=http://nginx.org/>nginx</a> 1.18.0 is now available in the master branch under daemon/nginx. This marks another daemon down. As an added bonus, tab complete and line editing history work on the sftp client now. We are currently planning to add Exim, OpenNTPD, a DNS server (which one is TBD), and MariaDB in the near future.
</p>

<p>
A port of Fidelix to the i686 architecture is under way. I am currently in the middle of the adruous process of porting the bootstrap tools. You can check out the current progress on ths <a href=https://github.com/Z5T1/fidelix/tree/i686>i686 branch</a>.
<p>

<p>
We are looking for people who would be interested in helping to port a few daemons to the base system. If you are interested in helping, please send an email to <a href=mailto:z5t1@z5t1.com>z5t1@z5t1.com</a>.

</div>

<?php do_footer(); ?>

