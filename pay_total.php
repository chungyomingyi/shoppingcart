<?php session_start()?>
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
	     <div id="shopping-cart">
		<table cellpadding="10" cellspacing="1">
			<tbody>
				<tr>
				<th><strong>產品名稱</strong></th>
				<th><strong>數量</strong></th>
				<th></th>
				<th></th>
				<th><strong>價格</strong></th>
				</tr>
			<!--用foreach顯示選取的物品-->
			<?php foreach ($_SESSION["cart_item"] as $item){?>
						<tr>
						<td><strong><?php echo $item["name"]; ?></strong></td>
						<td><?php echo $item["quantity"]; ?></td>
						<td></td>
						<td align=right><?php echo "$".$item["price"]; ?></td>
						<td></td>
						<td></td>
						</tr>
						<?php $item_total += ($item["price"]*$item["quantity"]);}?>
				<tr>
					<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
					<td><a class="order" href="pay_total.php">付款</a></td>
				</tr>
			</tbody>
</table>		

</div>
	      
	      
      </div>
</div>
<?php require_once("menu_bottom.php"); ?>	
    </body>
</html>