<?php
  require_once("dbtools.php");
  header("Content-type: text/html; charset=utf-8");
  //取得表單資料
  $account = $_POST["account"]; 	
  $password = $_POST["password"];
  //建立資料連接
  $link = create_connection();
  //檢查帳號密碼是否正確
  $sql = "SELECT * FROM users Where account = '$account' AND password = '$password'";
  $result = execute_sql($link, "member", $sql);
  //如果帳號密碼錯誤
  if (mysqli_num_rows($result) == 0){
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
    //關閉資料連接	
    mysqli_close($link);
    //顯示訊息要求使用者輸入正確的帳號密碼
    echo "<script type='text/javascript'>";
    echo "alert('帳號密碼錯誤，請查明後再登入');";
    echo "history.back();";
    echo "</script>";
  }else{  //如果帳號密碼正確
    //取得 id 欄位
    $account = mysqli_fetch_object($result)->account;
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
    //關閉資料連接	
    mysqli_close($link);
    //將使用者資料加入 SESSION
    $_SESSION["account"] = $account;
    echo "<script type='text/javascript'>";
    echo "alert('登入成功');";
    echo "history.back();";
    echo "</script>";
    
    header("location:index.php");		
  }
?>