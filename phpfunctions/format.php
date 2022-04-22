<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/formatStyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php 
  function pageHeader($title, $img)
  {
    echo<<<EOT
    <div class="navbar navbar-nav">
    <div class="row">
    <div class="col-6">
      <img id="head-logo" src=$img width="175" height="100">
    </div>
    <div class="col-4">
      <h1 id="head-title">$title</h1>
    </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Home</a>
        <a class="dropdown-item" href="#">Forum</a>
        <a class="dropdown-item" href="./store.php">Store</a>
        <a class="dropdown-item" href="./cart.php">Cart <i class="fa fa-shopping-cart"></i></a>
  
        
    EOT;
    if(!isset($_SESSION['name']))
    {
      echo<<<EOT
      <a class="dropdown-item" href="./register.php">Signup</a>
      <a class="dropdown-item" href="./login.php">Login</a>
      </div>
      </div> 
      </div>
      EOT;
    }
    else
    {
      echo<<<EOT
      <a class="dropdown-item" href="./phpfunctions/logout.php">Logout</a>
      </div>
      </div> 
      </div>
      EOT;
    }
    
    
  }

  function pageFooter()
  {

  }
?>

<script type="text/javascript" src = "./js/formatJS.js"></script>
<script>
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
