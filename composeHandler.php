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
      require_once './phpfunctions/format.php';
        $pageTitle="FORUM";
        $logo="./img/comiclogo.png";
        pageHeader($pageTitle,$logo);
      require_once "./phpfunctions/connection.php";

      $conn=connect_db();
      $tName=$_POST["topicName"];
      $message=$_POST["message"];
      $cId=$_POST["categoryId"];
      $uName=$_SESSION['name'];
      
      $query="SELECT userid FROM users WHERE name = \"$uName\"";
      $result=$conn->query($query);
      if(!$result) 
        die("Query error on signup!");
      else
      {
          $row=$result->fetch_array(MYSQLI_ASSOC);
          $uId=$row["userid"];
          $query="INSERT INTO forum_topics (subject, category_id, user_id) VALUES (\"$tName\", \"$cId\", \"$uId\");";

          $result=$conn->query($query);
          if(!$result) 
            die("Query error on signup!");
          else
          {
            $query="SELECT topic_id FROM forum_topics WHERE subject = \"$tName\" AND category_id = \"$cId\";";
            $result=$conn->query($query);
            if(!$result) 
            die("Query error on signup!");
            else
            {
              $row=$result->fetch_array(MYSQLI_ASSOC);
              $tId=$row["topic_id"];
              $messHtml = "<p>$message</p>";
              $query="INSERT INTO forum_posts (message, topic_id, user_id, name) VALUES (\"$messHtml\", \"$tId\", \"$uId\", \"$uName\");";

              $result=$conn->query($query);
              if(!$result) 
                die("Query error on signup!");
              else
              {
                echo "message saved.";
                $conn->close();
                header("Location: ./post.php?topic_id=$tId");
              }
            }
          }
      }
      

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>