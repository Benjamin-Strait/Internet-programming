<!--The form used for purchasing your pizzas-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    

    <title>Checkout</title>
  </head>
  <body>
    <div class = "container">
    <?php
    //page header
    require_once './phpfunctions/format.php';

    $pageTitle = "CHECKOUT";
    $logo = "./img/comiclogo.png";
    pageHeader($pageTitle, $logo);
    ?>
    <!--creates a form that will only insert items in the database when given valid email, phone number, and credit card-->
    <form action = "./checkoutHandler.php" method = "POST" onsubmit = "return validatecheckout(this)">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name = "email" onblur = "validateemail(this)" placeholder="Enter email">
    <p id = "emailmsg"></p>
  </div>
  <div class="form-group">
    <label for="phone">Phone number</label>
    <input type="text" class="form-control" id="phone" name = "phone" onblur = "validatephone(this)" placeholder="Phone number XXX-XXX-XXXX">
    <p id = "phonemsg"></p>
  </div>
  <input type = "hidden" id = "order" name = "orderInfo" value = "">
  <!--Buttons for placing the order and canceling the order-->
  <div class ="row ">
      <div class = "col-6" >
        <button type="submit"  >Place Order</button>
        <button type = "button" onclick= cancel()>Cancel</button>
</div>
  </div>
</form>

</div>
<?php
//shows the page footer
 pageFooter();
 ?>

  <!--access to cart.js functions-->
  <script type = "text/javascript" src = "./js/cart.js"></script>
  <!--calls getOrdersForServer()-->
  <script type = "text/javascript" >
    getOrdersForServer();
  </script>
  <script type="text/javascript" src = "./js/validation.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>