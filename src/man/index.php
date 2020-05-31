<?php
include "util.php";
do_header("Fidelix Linux");

function list_pages($section) {
	$pages = shell_exec("ls /usr/share/man/man$section | grep -v '>'");
	print("<a name=$section><h1>Section $section</h1></a>\n");
	print("<div class=thin_column>");
	print("<ul>\n");
	foreach (explode("\n", $pages) as $page) {
		if ($page == "")
			continue;
		print("	<li><a href=/man/master/man$section/$page.html>$page</a></li>\n");
	}
	print("</div>\n</ul>\n");
}

?>

<h1>Contents</h1>
<ul>
	<li><a href=#1>Section 1: Executable programs or shell commands</a></li>
	<li><a href=#4>Section 4: Special files</a></li>
	<li><a href=#5>Section 5: File formats and conventions</a></li>
	<li><a href=#6>Section 6: Games</a></li>
	<li><a href=#7>Section 7: Miscellaneous</a></li>
	<li><a href=#8>Section 8: System administration commands</a></li>
</ul>

<?php

list_pages(1);
list_pages(4);
list_pages(5);
list_pages(6);
list_pages(7);
list_pages(8);

do_footer();

?>

