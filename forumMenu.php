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
      $pageTitle="FORUM";
      $logo="./images/logo1.png";
      pageHeaderSession($pageTitle,$logo);

      require_once 'connection.php';
      $conn=connect_db();

      
      $query="SELECT * FROM forum_category";
      $result=$conn->query($query);

      if(!$result) die("fatal error on query");

      $rows=$result->num_rows;
      echo "<table><tr><th>Categories</th><th>Description</th></tr>";
      for ($i = 0; $i < $rows; $i++)
      {
        $row=$result->fetch_array(MYSQLI_ASSOC);  
        $name=$row["name"];
        $id=$row["category_id"];
        $description=$row["description"];
        echo "<tr><td id=\"$id\" onclick=\"forumSwap($id)\">$name</td><td>$description</td></tr>";
      }
      echo "</table>";
    ?>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>