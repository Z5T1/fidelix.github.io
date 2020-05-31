<?php

include "util.php";

if ( count($argv) != 2 ) {
	print("Usage: $argv[0] <PAGE>\n");
	exit;
}

$page = $argv[1];

do_header($page, TRUE);

system("mandoc -T html -O style=../mandoc.css,fragment,man=../man%S/%N.%S.html $page");

do_footer();

?>
