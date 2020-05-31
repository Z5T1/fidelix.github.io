<?php
include "util.php";
do_header("Fidelix Linux");
?>

<h1 id="about-fidelix">About Fidelix</h1>
<p>Fidelix is a light weight Linux distribution that focuses on proactive
security. It aims to eliminate unnecessary code and is targeted primarily
towards servers and embedded systems.</p>
<h1 id="features">Features</h1>
<h2 id="functionality-features">Functionality</h2>
<p>Includes these packages in the standard installation (this list is not exhaustive):</p>
<ul>
<li>The Linux Kernel</li>
<li>musl C Library</li>
<li>GNU Binutils</li>
<li>GCC</li>
<li>GNU Make</li>
<li>BusyBox (which provides the bulk of the userspace)</li>
<li>Mandoc</li>
<li>Perl</li>
<li>Miscellaneous System Scripts</li>
<li>OpenSSH</li>
<li>nginx</li>
</ul>
<p>At least a minimal set of daemons will be included in the base system in the future.</p>
<p>Eventually, the plan is to support <a href="https://www.pkgsrc.org/">pkgsrc</a> from NetBSD. This will (hopefully) provide over 22 000 packages in addition to the base system for users who require or would like additional functionality.</p>
<h2 id="security-features">Security</h2>
<ul>
<li>Uses <a href="https://en.wikipedia.org/wiki/Bcrypt">bcrypt</a> for /etc/shadow by default.</li>
<li>No SUID or SGID executables in the default installation; binaries that need additional privileges use capabilities instead.</li>
<li>/proc mounted with hidepid=2: Other users' processes are hidden for all users except root.</li>
<li>Uses <a href="https://www.libressl.org/">LibreSSL</a>.</li>
<li>All packaged compiled as position independent executables with stack smashing protection enabled.</li>
</ul>
<h1 id="history">History</h1>
<p>After working on <a href="https://cucumberlinux.com/">Cucumber Linux</a> for over three years, I began to realize that the distribution had grown too large and convoluted for such a small development team keep up with. I decided that if I had a chance to do it all over, I would place less emphasis on desktop usage and more emphasis on server/embedded usage. Additionally, I would greatly reduce the code base of the base system and opt for lighter weight packages where possible to further reduce the codebase and decrease the maintainence burden. By a <a href="https://www.cdc.gov/coronavirus/2019-ncov/">work of fate</a>, I ended up with a large amount of free time in March and April of 2020 and I decided to give these ideas a try.</p>

<?php do_footer(); ?>

