<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Tokyo");

	$db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
  $db['dbname'] = ltrim($db['path'], '/');
  $dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
  $user = $db['user'];
  $password = $db['pass'];
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY =>true,
	);
	
	//$con = mysqli_connect("localhost", "root", "root", "slotify");
	$con = new PDO($dsn,$user,$password,$options);
	//if (mysqli_connect_errno()) {
	//	echo "Failed to connect:".mysqli_connect_errno();
	//}
?>