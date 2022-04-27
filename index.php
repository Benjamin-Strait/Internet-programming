<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    
    <?php
      require_once './phpfunctions/format.php';
      $pageTitle="Home";
      $logo="./img/comiclogo.png";
      pageHeader($pageTitle,$logo);
    ?>
    <div class = "container">
    <h1> Welcome to the Strait Up Cool Comic Collection! </h1>
    <div class="row"><div class="col-4">
    <p> We have been collecting comics from the olden years, finding eight of the priciest comics in our collection for purchase now!</p>
    </div>
    <div class="col-4">
    <img class="img-responsive" width="75%" height="auto" src="img/boxes.jpg" alt="Comic Boxes">
    </div>
    <div class="col-4">
    <p> Every few weeks, we will add new comics to sell in our amazing collection. </p>
    </div>
    </div>
    <p> To join the discussion about comics click <a href="category.php"> here </a> or if you want to order some comics click <a href="store.php"> here </a></p>
    

    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </div>
    <?php pageFooter() ?>
  </body>
</html>