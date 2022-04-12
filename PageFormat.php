<?php
session_start();
/* 
to do for this file: 
move CSS to seperate file
add actual page links to nav
move drop to right side of screen instead of left
get logo and page title set up on left side of screen
*/
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title></title>
    <style type="text/css">
    	body 
      {
        font-family: Arial, Helvetica, sans-serif;
      }

      .navbar 
      {
        overflow: hidden;
        background-color: #333;
      }

      .navbar a 
      {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      .dropdown 
      {
        float: left;
        overflow: hidden;
      }

      .dropdown .dropbtn 
      {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .navbar a:hover, .dropdown:hover .dropbtn 
      {
        background-color: blue;
      }

      .dropdown-content 
      {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a 
      {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover 
      {
        background-color: #ddd;
      }

      .dropdown:hover .dropdown-content 
      {
        display: block;
      }
    </style>
  </head>
  <body>
  	<?php
  	
    function pageHeader()
    {
      echo<<<EOT
        <div class="navbar">
          <div class="dropdown">
          <button class="dropbtn">Menu 
            <i class="fa fa-caret-down"></i>
          </button>
            <div class="dropdown-content">
              <a href="#">Home</a>
              <a href="#">Forum</a>
      EOT;
      if(!isset($_SESSION['name'])) //user not logged in
      {
        echo ' <a href="#">Login</a>';
        echo ' <a href="#">Sign up</a>';
      }
      else
        echo '<a href="#">Logout</a>';


              echo'<a href="#">Store</a>
              <a href="#">Cart</a>
            </div>
          </div> 
        </div>';
      
     }

     function pageFooterSession()
     {
        echo '<a href="#">Admin Login</a>';
         
      }

  	?>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>