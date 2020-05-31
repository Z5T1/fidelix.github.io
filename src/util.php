<?php

function do_header($title) {
	print("
<!DOCTYPE HTML>
<head>
	<title>$title</title>
	<link rel='stylesheet' href='style.css' />
</head>
<body>
	<div class=contents>
	<h1>The Fidelix Linux Distribution</h1>
	<h2>Simple, Stable, and Secure</h2>
");
	include("menubar.php");
}

function do_footer() {
	print('
	</div>
</body>
');
}

?>
