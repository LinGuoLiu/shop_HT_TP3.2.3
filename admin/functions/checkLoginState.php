<?php
if (!session_id()) session_start();
header("content-type:text/html;charset=utf-8");
if(@$_SESSION['username']=="" || @$_SESSION['islogin'] != 1){
	echo "<script>alert('对不起，您还没登录，请返回!');window.location.href='login.html';</script>";
}
?>
