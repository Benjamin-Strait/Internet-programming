<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>

    <?php
      require_once 'pageFormatSession.php';

      $pageTitle = "LOGIN";
      $logo="./images/logo1.png";
      pageHeaderSession($pageTitle,$logo);
      require_once "connection.php";

      $conn=connect_db();
      $message=$_POST["message"];
      $tId=$_POST["topic_id"];
      $uName=$_SESSION['name'];
      
      $query="SELECT userid FROM login WHERE name = \"$uName\"";
      $result=$conn->query($query);
      if(!$result) 
        die("Query error on signup!");
      else
      {
          $row=$result->fetch_array(MYSQLI_ASSOC);
          $uId=$row["userid"];
          $messHtml = "<p>$message</p>";
          $query="INSERT INTO forum_posts (message, topic_id, user_id, name) VALUES (\"$messHtml\", \"$tId\", \"$uId\", \"$uName\");";

              $result=$conn->query($query);
              if(!$result) 
                die("Query error on signup!");
              else
              {
                echo"<p> please click the back arrow and refresh the page to get back</p>";
              }
      }
      ?>
  </body>
</html>
