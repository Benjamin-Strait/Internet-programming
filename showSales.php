<?php 
	require_once("./phpfunctions/connection.php");

	$conn=connect_db();

	$date=$_GET["date"];
	$query = "SELECT comics.Title, comics.SalesPrice, comics.Grade, quantity FROM orders JOIN comics ON comics.Id=orders.comicID WHERE orderDate LIKE \"%$date%\";";

	$result = $conn->query($query);
	if(!$result)
		die("Failed retriving DB query");
	$numRows = $result->num_rows;

	class Order
	{
		public $Title;
		public $SalesPrice;
		public $Grade;
		public $quantity;
	}


	$orders = array();
	for ($i = 0; $i < $numRows; $i++) 
	{
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$orders[$i] = new Order();
		$orders[$i]->Title = $row["Title"];
		$orders[$i]->SalesPrice = $row["SalesPrice"];
		$orders[$i]->Grade = $row["Grade"];
		$orders[$i]->quantity = $row["quantity"];
	}

	echo json_encode($orders);
?>
