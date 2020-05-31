<?php
include "util.php";
do_header("Fidelix Linux");
?>

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

