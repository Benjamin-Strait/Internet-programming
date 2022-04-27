<!--
holds all of the information to be shown in the shopping cart
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/formatStyle.css">
    <title>Cart</title>
  </head>
  <body>

    
    <?php
    //page header
    require_once './phpfunctions/format.php';

    $pageTitle = "CART";
    $logo = "./img/comiclogo.png";
    pageHeader($pageTitle, $logo);
    ?>
    <div class = "container">  
      <div id = "cartinfo">

      <!--buttons for clearing the cart and checking out-->
      </div>
      
      <a href="./checkout.php">
         <div class ="row ">
        <button type = "button">
            Checkout
        </button>
    </a></a>
    
      <button type = "button"  onclick= clearcartHTML()>Clear Cart</button>
    </div>
            
    <!--allows access to cart.js functions-->
    <script type="text/javascript" src = "./js/cart.js"></script>
    <!--displays the contents of the cart-->
    <script type="text/javascript">
      displayCart();

    </script>
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
