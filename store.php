<!--Displays the pizza resturant's menu-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>Store</title>
  </head>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

</body>
</html>
  <body>

    
    <?php
    //page header
    require_once './phpfunctions/format.php';

    $pageTitle = "STORE";
    $logo = "./img/comiclogo.png";
    pageHeader($pageTitle, $logo);
    
    echo '<br>';
    
    echo "<div class = \"container\">";

    require_once './phpfunctions/connection.php';
    $conn = connect_db();

    //selects everything from the menu table
    $query = "SELECT * FROM comics";
    $result = $conn->query($query);
    //Ends the program if the entries aren't found
    if(!$result) die("fatal error on query!");
      
    //Shows Everything on the menu and includes information about the food and a button to add pizzas to the cart
    $rows = $result->num_rows;
    echo "<div class =\"row \">";
    for ($i = 0; $i < $rows; $i++)
    {
      echo "<div class= \"col-3 mb-3\">";
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $img = "./img/" . $row["Image"];
      $title = $row["Title"];
      $issue = $row["IssueNumber"];
      $grade = $row["Grade"];
      $price = "$" . $row["SalesPrice"];
      $comicInfo = implode("|", $row);
      echo "<img src=\"$img\" alt=\"$img\" width=\"200\" height=\"200\">";
      echo "<br>"."<b>$title</b>" ." (" . "<b>Issue </b>" . "<b>$issue</b>" . ")";
      echo "<br>" ."Grade: ". $grade;
      echo " <br>" . "Sales Price: " . $price . "<br>";
      echo "<button type=\"button\" onclick = \"addToCart(this)\" value = \"$comicInfo\">ADD TO CART</button>";
      
      
      
      //echo "<br> <a href=\"menu.php\"> More Info</a>";
      echo "</div>";
    }

    echo "</div>";
    //closes the connection to the database
    $conn -> close();
    ?>

    <script type="text/javascript" src = "./js/cart.js"></script>
    <!-- Optional JavaScript -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
    <?php
//shows the page footer
 pageFooter();
 ?>
  </body>
</html>
