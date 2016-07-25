<?php require_once("checkid.php"); ?>
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
					<li><a href="contact.php">Contact</a></li>|
					<?php if ($account == "Guest"): ?>
					<li><a href="login.php">Login</a></li>
					<?php else: ?>
					<li><a href="login.php?logout=1"><?php echo $account ?> logout</a></li>
					<?php endif; ?>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--載入上層選項-->
<?php require_once("menu_top.php"); ?>
<div class="contact">
	<div class="container">
		<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li class="active">Contact</li>
		</ol>
	 <h3>聯絡我們Contact Us</h3>
		<div class="section group">				
			<div class="col-md-6 span_2_of_3">
				<div class="contact_info">
		    	 	<h4>所在地We Are Here</h4>
		    	 		<div class="map">
				   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.565552306124!2d120.34135811526002!3d22.59534663782894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e034d35d4e311%3A0xf36baff5d9dbe067!2zODMw6auY6ZuE5biC6bOz5bGx5Y2A6bOz55Sy6LevMzAy6Jmf!5e0!3m2!1szh-TW!2stw!4v1467699649872"></iframe>
				   		</div>
		  		</div>
		  		<div class="company_address">
			     	<h4>公司資訊Company Information :</h4>
			     			<p>83094高雄市鳳山區鳳甲路302號</p>
					    	<p>No.302, Fengjia Rd., Fengshan Dist., </p>
					   		<p>Kaohsiung City 830, Taiwan (R.O.C.)</p>
			   		<p>Phone:(07) 796 3153</p>
			   		<p>Follow on: <a href="https://zh-tw.facebook.com/CBT-%E5%A4%A9%E4%BD%BF%E8%BC%AA-Angel-wheels-1386995218210407/">Facebook</a>, <a href="http://twitter.com/AnthonyCBT">Twitter</a></p>
			    </div>
			</div>		
		</div>
	</div>
</div>
<?php require_once("menu_bottom.php"); ?>		 
</body>
</html>