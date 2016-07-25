<?php require_once("checkid.php"); ?>
<?php
session_start();
require_once("dbcontroller.php");	//連線資料庫
$db_handle = new DBController();	//new $db_handle物件，來加入購物車資料選項
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":	//新增物品至購物車
		if(!empty($_POST["quantity"])) {	//以數量來判斷，預設為1
			//以product的 Code 欄位為依據撈資料
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			//
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 
																'code'=>$productByCode[0]["code"], 
																'quantity'=>$_POST["quantity"], 
																'price'=>$productByCode[0]["price"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":	//移除已選的購物車
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":	//清空購物車內容
		unset($_SESSION["cart_item"]);
	break;	
	}
}
?>
<HTML>
<HEAD>
<title>CBTwheels</title>
<?php require_once("head_data.php"); ?>
</HEAD>
<BODY>
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
			<div class="txt-heading">購物車Shopping Cart <a id="btnEmpty" href="item.php?action=empty">清空購物車</a></div>
			<?php
			if(isset($_SESSION["cart_item"])){
		    $item_total = 0;
			?>	
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
							<td><?php if ($item["quantity"] < 99 ){ //如果輸入數量大於99將跳出警告視窗
								echo $item["quantity"]; 
							}else{ 
								echo "<script type='text/javascript'>";
    							echo "alert('數量有誤，請重新輸入');";
    							echo $item["quantity"] = 1 ;
    							echo $item["price"] = 0 ;
    							echo "</script>";
							}
							?></td>
							<td></td>
							<td align=right><?php echo "$".$item["price"]; ?></td>
							<td></td>
							<td><a href="item.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">不想買</a></td>
						</tr>
						<?php $item_total += ($item["price"]*$item["quantity"]);}?>
						<tr>
							<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
							<td><a class="order" href="pay_total.php">結帳</a></td>
						</tr>
					</tbody>
				</table>		
						  <?php
						}
						?>
		</div>
		<div id="product-grid">
			<div class="txt-heading">產品</div>
				<?php  //用foreach迴圈撈product裡所有的資料，顯示在產品清單中
					$product_array = $db_handle->runQuery("SELECT * FROM product");
					if (!empty($product_array)) { 
						foreach($product_array as $key=>$value){
					?>
						<div class="product-item">
							<form method="post" action="item.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
							<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
							<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
							<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
							<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
							</form>
						</div>
					<?php
						}
					}
				?>
		</div>
	</div>
</div>
</BODY>
</HTML>