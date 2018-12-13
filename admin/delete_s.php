<meta http-equiv="content-type"  content="text/html" charset="utf-8" />

<?php
	include("functions/conn.php");
	$id=$_GET["id"];	
	$sql="delete from tb_shopping where id=$id";	
	$result=mysqli_query($conn,$sql);
	if($result){
		echo"<script> alert('删除成功'); location.href='query_s.php';</script>";
	}
	else{
		echo"<script> alert('删除失败'); history.back();</script>";
	}
?>