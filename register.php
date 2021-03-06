<!--The form used for new users to create an account-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>Register</title>
  </head>
  <body>
    
    <?php
    //page header
    require_once './phpfunctions/format.php';

    $pageTitle = "SIGNUP";
    $logo = "./img/comiclogo.png";
    pageHeader($pageTitle, $logo);
    ?>
    <div class = "container">
  <!--Creates a form that asks for the user's name, email and password-->

<form action = "./insert.php" method = "POST" onsubmit = "return validateregister(this)">
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="text" class="form-control" id="name" name = "name" onblur = "validatename(this)" placeholder="John Doe">
    <p id = "namemsg"></p>
  </div>
  <div class = "form-group">
    <label for="email">Email address</label><br>
    <input type="text" class="form-control" id="email" name = "email" onblur = "validateemail(this)" placeholder="john@example.com">
    <p id = "emailmsg"></p>
  </div>
  <div class="form-group">
    <label for="uname">Username</label><br>
    <input type="text" class="form-control" id="uname" name = "uname" onblur = "validateuser(this)" placeholder= "Enter Username">
    <p id = "usermsg"></p>
    
  </div>
  <div class="form-group">
    <label for="pwd">Password</label><br>
    <input type="password" class="form-control" id="pwd" name = "pwd" onblur = "validatepwd(this)"placeholder="Enter Password">
    <p id = "pwdmsg">Use 6 or more characters with a mix of letters, numbers, and symbols.</p>
  </div>
  <input type="submit" >
</div>
<?php
//shows the page footer
 pageFooter();
 ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src = "./js/validation.js"></script>
    </div>
  </body>
</html>
