<?php
	function connect_db()
	{
		$hn = "localhost";
		$un = "phpUser";
		$pwd = "Phpadmin@1234";
		$db = "pizzadb_lab";

		$conn = new mysqli($hn, $un, $pwd, $db);
		if($conn->connect_error) 
			die("Failed to connect to DB");

		return $conn;
	}
?>