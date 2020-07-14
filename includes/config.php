<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Tokyo");

	// $db = parse_url(getenv("CLEARDB_DATABASE_URL"));
	// $host = $db['host'];us-cdbr-east-02.cleardb.com
	// $user = $db['user'];b9203a4216854e
	// $password = $db['pass'];bb9d8c14
	// $dbname = $db['dbname'];heroku_43a8a15253d2abe
	// mysql://b9203a4216854e:bb9d8c14@us-cdbr-east-02.cleardb.com/heroku_43a8a15253d2abe?reconnect=true
	
	$con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b9203a4216854e", "bb9d8c14", "heroku_43a8a15253d2abe");
	if (mysqli_connect_errno()) {
		echo "Failed to connect:".mysqli_connect_errno();
	}
?>