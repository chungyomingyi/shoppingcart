<html>
  <head>
    <title>CBTwheels</title>
    <?php require_once("head_data.php"); ?>
    <script type="text/javascript">
      function check_data(){ //判斷新增會員資料是否符合條件
        if (document.myForm.account.value.length == 0){
          alert("「使用者帳號」一定要填寫哦...");
          return false;
        }
        if (document.myForm.account.value.length > 12){
          alert("「使用者帳號」不可以超過 12 個字元哦...");
          return false;
        }
        if (document.myForm.password.value.length == 0){
          alert("「使用者密碼」一定要填寫哦...");
          return false;
        }
        if (document.myForm.password.value.length > 12){
          alert("「使用者密碼」不可以超過 12 個字元哦...");
          return false;
        }
        if (document.myForm.re_password.value.length == 0){
          alert("「密碼確認」欄位忘了填哦...");
          return false;
        }
        if (document.myForm.password.value != document.myForm.re_password.value){
          alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
          return false;
        }
        if (document.myForm.name.value.length == 0){
          alert("您一定要留下真實姓名哦！");
          return false;
        }	
        if (document.myForm.year.value.length == 0){
          alert("您忘了填「出生年」欄位了...");
          return false;
        }
        if (document.myForm.month.value.length == 0){
          alert("您忘了填「出生月」欄位了...");
          return false;
        }	
        if (document.myForm.month.value > 12 | document.myForm.month.value < 1){
          alert("「出生月」應該介於 1-12 之間哦！");
          return false;
        }
        if (document.myForm.day.value.length == 0){
          alert("您忘了填「出生日」欄位了...");
          return false;
        }
        if (document.myForm.month.value == 2 & document.myForm.day.value > 29){
          alert("二月只有 28 天，最多 29 天");
          return false;
        }	
        if (document.myForm.month.value == 4 | document.myForm.month.value == 6
          | document.myForm.month.value == 9 | document.myForm.month.value == 11){
          if (document.myForm.day.value > 30)
          {
            alert("4 月、6 月、9 月、11 月只有 30 天哦！");
            return false;					
          }
        }else{
          if (document.myForm.day.value > 31){
            alert("1 月、3 月、5 月、7 月、8 月、10 月、12 月只有 31 天哦！");
            return false;					
          }				
        }
        if (document.myForm.day.value > 31 | document.myForm.day.value < 1){
          alert("出生日應該在 1-31 之間");
          return false;
        }	
        myForm.submit();					
      }
    </script>		
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
<div class="container">
    <p align="center">
      <div class="registration">
        <h2 align="center">新帳號註冊 <span> create an account </span></h2>
        <h3 align="center">請填入下列資料 <span>(標示「*」欄位請務必填寫)</span></h1>
          <div class="registration_form">
          <form action="addmember.php" method="post" name="myForm" >
              <table border="2" align="center" bordercolor="#6666FF" >
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">*使用者帳號：</font></td>
                  <td><input name="account" type="text" size="15">
                  <font color="#ffffff">(請使用英文或數字鍵)</font></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">*使用者密碼：</font></td>
                  <td><input name="password" type="password" size="15">
                  <font color="#ffffff">(請使用英文或數字鍵)</font></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">*密碼確認：</font></td>
                  <td><input name="re_password" type="password" size="15">
                  <font color="#ffffff">(再輸入一次密碼)</font></td>
                </tr>
                <tr bgcolor="#00a0dc">
                  <td align="right"><font color="#ffffff">*姓名：</font></td>
                  <td><input name="name" type="text" size="8"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">*性別：</font></td>
                  <td> 
                    <input type="radio" name="sex" value="男" checked><font color="#ffffff">男</font> 
                    <input type="radio" name="sex" value="女"><font color="#ffffff">女</font>
                  </td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">*生日：</font></td>
                  <td><font color="#ffffff">民國</font>
                    <input name="year" type="TEXT" size="2"><font color="#ffffff">年</font> 
                    <input name="month" type="TEXT" size="2"><font color="#ffffff">月</font>
                    <input name="day" type="TEXT" size="2"><font color="#ffffff">日</font>
                  </td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">電話：</font></td>
                  <td><input name="telephone" type="text" size="20"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">行動電話：</font></td>
                  <td><input name="cellphone" type="text" size="20"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">地址：</font></td>
                  <td><input name="address" type="text" size="45"></td>
                </tr>
                <tr bgcolor="#00a0dc">
                  <td align="right"><font color="#ffffff">E-mail 帳號：</font></td>
                  <td><input name="email" type="text" size="30"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">個人網站：</font></td>
                  <td><input name="url" type="text" value="http://" size="40"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="right"><font color="#ffffff">備註：</font></td>
                  <td><textarea name="comment" cols="45" rows="4" ></textarea></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                  <td align="center" colspan="2"> 
                    <input type="button" value="加入會員" onClick="check_data()">　
                    <input type="reset" value="重新填寫">
                  </td>
                </tr>
              </table>
            </form>
        </div>
    </div>
</div>
<?php require_once("menu_bottom.php"); ?>		
</body>
</html>