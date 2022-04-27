<?php
class Database{

	private$hn = "localhost";
	private$un = "u861154739_ComicAdmin";
	private$pwd = "Abc123!!!";
	private$db = "u861154739_Comic";
	public function connect_db()
	{
	$conn = new mysqli($this->hn, $this->un, $this->pwd, $this->db);
	if($conn->connect_error)
	{
		die("Fatal error on connecting DB");
	}
	return $conn;
	}
	}

?>