<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/formatStyle.css">
</head>
<body>

<?php 
  function pageHeader($title, $img)
  {
    echo<<<EOT
    <div class="navbar">
    <img src=$img width="175" height="100">
    <h1>$title</h1>
      <div class="dropdown" onmouseleave="hideMenu()">
          <button class="dropbtn" onmouseover="showMenu()" onclick="showMenu()">Menu
            <i class="fa fa-caret-down"></i>
          </button>
        <div class="dropdown-content" id="Dropdown">
          <a href="#">Home</a>
          <a href="#">Forum</a>
          <a href="./store.php">Store</a>
          <a href="./cart.php">Cart <i class="fa fa-shopping-cart"></i></a>
        
    EOT;
    if(!isset($_SESSION['name']))
    {
      echo<<<EOT
      <a href="./register.php">Signup</a>
      <a href="./login.php">Login</a>
      </div>
      </div> 
      </div>
      EOT;
    }
    else
    {
      echo<<<EOT
      <a href="#">Logout</a>
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
