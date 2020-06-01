<?php

function do_header($title, $man=FALSE) {
	print("
<!DOCTYPE HTML>
<head>
	<title>$title</title>");
	if ( $man === TRUE )
		print("		<link rel='stylesheet' href='/mandoc.css' />");
	print("
	<link rel='stylesheet' href='/style.css' />
</head>
<body>
	<div class=contents>
	<div class=header>
	<h1>The Fidelix Linux Distribution</h1>
	<h2>Simple, Stable, and Secure</h2>
	</div>
");
	include("menubar.php");
	print("
	<div class=body>");
}

function do_footer() {
	print('
	</div>
	<div class=footer>
		<p>Copyright 2020 Scott Court</p>
	</div>
	</div>
</body>
');
}

?>
