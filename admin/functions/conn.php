<meta charset="utf-8" />
<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbname="db_news";
	$conn = "";
	$mydbcharset="utf-8";
	
	$conn = mysqli_connect($host,$user,$password) or die("连接mysql服务器失败".mysql_error());
	
	mysqli_select_db($conn,$dbname) or die("连接mysql数据库失败".mysql_error());
	
	mysqli_query($conn,'set names utf8');
?>