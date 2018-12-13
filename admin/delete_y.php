<meta http-equiv="content-type"  content="text/html" charset="utf-8" />

<?php
	include("functions/conn.php");
	$id=$_GET["id"];
//	$chk_sql="select id from tb_users where id=$id";
//	$chk_result=mysqli_query($conn,$chk_sql);
//	$chk_rows = mysqli_fetch_array($chk_result);
	$sql="delete from tb_users where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo"<script> alert('删除成功'); location.href='query_y.php' </script>";
	}
	else{
		echo"<script> alert('删除失败'); history.back();</script>";
	}
?>