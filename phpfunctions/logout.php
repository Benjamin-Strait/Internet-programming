<!--Logs the user out of their account-->
<?php
session_start();
$_SESSION=array();
setcookie(session_name(), "", time()-2592000, "/");
//Ends the session
session_destroy();
header('Location: ./index.php');
?>
<?php
//shows the page footer
 pageFooter();
 ?>