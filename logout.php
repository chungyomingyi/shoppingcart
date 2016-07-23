<?php
  //清除 cookie 內容
  setcookie("id", "");
  setcookie("passed", "");
	
  //將使用者導回登入頁
  header("location:login.php");
  exit();
?>