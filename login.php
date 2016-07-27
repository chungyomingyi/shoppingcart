<?php
session_start();
if (isset($_GET["logout"]))
{
	$_SESSION("account", "Guest", time() - 3600);
	header("Location: index.php");
	exit();
}

//判斷輸入的帳號密碼是否正確
if (isset($_POST["btnOK"]))
{
	$account = $_POST["account"];
	if (trim($account) != "")
	{
		$_SESSION("account", $account);
		if (isset($_SESSION["lastPage"]))
		  header(sprintf("Location: %s", $_SESSION["lastPage"]));
		else
		   header("Location: index.php");
		exit();
	}
}
?>
<html>
    <head>
        <title>CBTwheels</title>
<?php require_once("head_data.php"); ?>
    </head>
<body>
    <div class="top_bg">
		<div class="container">
			<div class="header_top-sec">
				<div class="top_right">
					<ul>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--載入上層選項-->
<?php require_once("menu_top.php"); ?>
<div class="login_sec">
	 <div class="container">
		<div class="col-md-6 log">
			<!--輸入帳號密碼並由checkpwd驗証是否存在或錯誤-->
             <form action="checkpwd.php" method="post" name="myForm">
				 <h5>帳號 userame:</h5>	
				 <input placeholder="名字 username:" type="text" id="account" name="account">
				 <h5>密碼 password:</h5>
				 <input placeholder="密碼 password" type="password" id="password" name="password">
				 <input type="submit" name="btnOK" value="Login">
  			     <a class="acount-btn" href="join.php">Create an Account</a>
			 </form>
		</div>
	</div>
</div>
<?php require_once("menu_bottom.php"); ?>		 
</body>
</html>