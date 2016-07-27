<?php

// function create_connection(){
//     $link = mysqli_connect("localhost", "root", "")
//       or die("無法建立資料連接: " . mysqli_connect_error());
	  
//     mysqli_query($link, "SET NAMES utf8");
			   	
//     return $link;
//   }
	
//   function execute_sql($link, $database, $sql){
//     mysqli_select_db($link, $database)
//       or die("開啟資料庫失敗: " . mysqli_error($link));
						 
//     $result = mysqli_query($link, $sql);
		
//     return $result;
//   }


class DBController {
	public $host = "localhost";
	public $user = "root";
	public $password = "";
	public $database = "store";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		mysql_select_db($this->database,$conn);
	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
	
	
}
?>