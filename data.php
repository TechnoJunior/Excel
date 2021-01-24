<?php
	require_once 'SimpleXLSX.php';
	header('Content-Type: application/json');

	if ( $xlsx = SimpleXLSX::parse('aish.xlsx') ) {
		// echo '<pre>';
		echo $data = json_encode($xlsx->rows());
	} else {
		echo SimpleXLSX::parseError();
	}
?>