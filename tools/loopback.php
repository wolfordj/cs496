<?php
	ini_set('display_errors', 1);
	header('Content-type: text/plain');
	$outArr = [];
	$outArr['RequestType'] = $_SERVER['REQUEST_METHOD'];
	$outArr['GetVariables'] = [];
	$outArr['PostVariables'] = [];
	foreach ($_GET as $key => $value) {
		$outArr['GetVariables'][$key]  = $value;
	}
	foreach ($_POST as $key => $value) {
		$outArr['PostVariables'][$key]  = $value;
	}
	echo json_encode($outArr);
?>