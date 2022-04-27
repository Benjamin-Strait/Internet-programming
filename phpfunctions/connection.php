<?php
	function connect_db()
	{
		$hn = "localhost";
		$un = "u861154739_ComicAdmin";
		$pwd = "Abc123!!!";
		$db = "u861154739_Comic";

		$conn = new mysqli($hn, $un, $pwd, $db);
		if($conn->connect_error) 
			die("Failed to connect to DB");

		return $conn;
	}
?>