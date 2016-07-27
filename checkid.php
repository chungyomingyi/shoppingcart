
<?php session_start();
if (isset($_SESSION["account"]))
  $account = $_SESSION["account"];
else 
  $account = "Guest";

?>