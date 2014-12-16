<?php
	ini_set('display_errors', 1);
	header($_SERVER["SERVER_PROTOCOL"]." 418 I'm a Teapot", true, 418); 
	header('Content-type: text/html', true);
	echo'<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
		<html><head>
		<title>418 - I\'m a Teapot</title>
		</head><body>
		<h1>Error 418 - I\'m a Teapot</h1>
		<p>You attempted to communicate with a teapot.</p>
		<hr>
		<address>Apache/2.2.15 (Red Hat) Server at classes.engr.oregonstate.edu Port 80</address>
		</body></html>';
?>