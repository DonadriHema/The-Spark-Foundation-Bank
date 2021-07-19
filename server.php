<?php
	define('DB_SERVER','127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'bankingsystem');	
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
?>