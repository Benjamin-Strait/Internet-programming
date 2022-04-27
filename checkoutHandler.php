<!--Handles the instructions to be completed when the form is submitted-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Place Order</title>
  </head>
  <body>
    <div class = "container">
    <?php
    //page header
    require_once './phpfunctions/format.php';

    $pageTitle = "ORDERS";
    $logo = "./img/comiclogo.png";
    pageHeader($pageTitle, $logo);

    
    //get input from the form login
    $email = $_POST["email"];
    $phone = str_replace("-", "", $_POST["phone"]);
    $orderInfo = json_decode($_POST["orderInfo"]);
    //echo $email. ": ".$pwd;
    //echo($phone . "<br>");

    require_once "./phpfunctions/connection.php";
    $conn = connect_db();
    $query = $conn->prepare( "INSERT INTO orders(customerID, comicID, quantity, orderDate) VALUES (?, ?, ?, CURRENT_TIMESTAMP);");
    $query-> bind_param("iii", $phone, $comicId, $quantity);
    foreach ($orderInfo as $comicId=> $quantity) 
    {
      $query->execute();  
    }
    //Indicates success
    echo("Your order was successful! Thank You for you purchase!");
    $conn->close();
    ?>
<?php
//shows the page footer
 pageFooter();
 ?>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type = "text/javascript" src = "./js/cart.js"></script>
    <script type = "text/javascript">
    clearcartHTML();
  </script>
    </div>
  </body>
</html>