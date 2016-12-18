<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'VXIUzNUUs6W7ZvJhJAuT';
	$db = 'robvankeilegom_be';
	$timeout = 2;

	$conn = mysqli_init( );
	$conn->options( MYSQLI_OPT_CONNECT_TIMEOUT, $timeout );
	$conn->real_connect($dbhost,  $dbuser, $dbpass, $db)
		or die  ("<br />Contact : <a href=mailto:Robvankeilegom@hotmail.com?subject=error&body=" . rawurlencode($conn->error) . ">Robvankeilegom@hotmail.com</a>");

	mysqli_select_db($conn, $db);

?>
