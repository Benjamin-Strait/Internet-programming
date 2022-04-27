<?php
session_start();
if(!isset($_SESSION["admin"]))
  die("You must log in as an administrator to access this page");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<title>Sales</title>
</head>
<body>
	
	<?php
		require_once('./phpfunctions/format.php');

		$pageTitle = "Sales";
		$logo = "./img/admin-logo.png";
		pageHeader($pageTitle, $logo);

	?>
	<div class="container">

	<form action="./showSales.php" method="POST">
		<label for="date">Enter the Date:</label>
		<br>
		<input type="text" id="date" name="date" placeholder="yyyy-mm-dd" required="required" onblur="searchOrders(this)">
		<br>
		<div id="orders"></div>
	</form>

	<script type="text/javascript" src="./js/search.js"></script>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>