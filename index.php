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
<div class="banner">
	 <div class="container">
	 </div>
</div>
<div class="welcome">
	 <div class="container">
		 <div class="col-md-3 welcome-left">
			 <h2>Welcome CBT</h2>
		 </div>
		 <div class="col-md-9 welcome-right">
			 <h3>Racing power.競賽級的力量.不只是一組普通的手編輪組，這是一組具有靈魂的輪組。</h3>
			 <p>Aero是指空力設計，也是之後Aluminum鋁合金的意思。Racing是指有競賽能力的設計。
27是指框高27mm。01是指初代設計。
AR2701不僅考慮到強度，更考慮到【視覺系】編輪。花鼓，鋼絲顏色都可以指定客製化編輪。
隨著設計能力，材料，以及感謝各供應商的支持，不但在花鼓有大幅的改善，並且順利取得所有細部零件，大大提升維修能力，以及設計素材。
如今【天使輪】不止有輕量化鋁合金輪組，現在還有重量只有1190公克的碳纖輪組CR4601 LT版。
大家或許萬萬也沒想到，原來天使輪的誕生，是一個胖子因為找不到輪組的【進擊】吧！</p>
		 </div>
	 </div>
</div>
 <?php require_once("menu_bottom.php"); ?>		 
</body>
</html>
