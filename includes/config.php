<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Tokyo");

	$db = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$host = $db['host'];
	$user = $db['user'];
	$password = $db['pass'];
	$dbname = $db['dbname'];

	
	$con = mysqli_connect($host, $user, $password, $dbname);
	if (mysqli_connect_errno()) {
		echo "Failed to connect:".mysqli_connect_errno();
	}
?>