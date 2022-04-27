
<!--Inserts the new login information into the users table in the pizza database-->
<!--The form used for new users to create an account-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/myStyle.css">

    <title>Register</title>
  </head>
  <body>
    <div class = "container">
<?php
//page header
    require_once './phpfunctions/format.php';

    $pageTitle = "SIGN UP";
    $logo = "./img/comiclogo.png";
    pageHeader($pageTitle, $logo);
require_once './phpfunctions/connection.php';
$conn = connect_db();
     //Each value to be inserted
     $username = $_POST["uname"];
     $name = $_POST["name"];
     $email = $_POST["email"];
     $pwd = $_POST["pwd"];
     //SHA1 encrypts the entered password
     $sql = "INSERT INTO users(password, name, email, username ) VALUES (SHA1(\"$pwd\"),\"$name\",\"$email\",\"$username\")";
     //Cancels the request if the database refuses to connect
     if ($conn->connect_error) 
     {
         die("Connection failed: " . $conn->connect_error);
     }
     //Messages romoted when connection is successful or not
     if ($conn->query($sql) == TRUE) 
     {
        echo "You have successfully signed up! ";
        echo "<a href=\"login.php\">Login Now?</a>";       
     } 
     else 
     {
        echo "Error: " . $sql . "<br>" . $conn->error;
     }
     //closes the database connection
     $conn->close();

?>
<?php/*
//shows the page footer
 pageFooter();
 */?>
