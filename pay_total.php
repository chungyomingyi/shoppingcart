<?php require_once("checkid.php"); ?>

<html>
    <head>
         <title>CBTwheels</title>
<?php require_once("head_data.php"); ?>
    </head>
    <body>
       <!--header-->	
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
	      
	      
	      
	     <?php $item_total ?>
	      
	      
	      
	      
	      
	      
      </div>
</div>
<?php require_once("menu_bottom.php"); ?>	
    </body>
</html>