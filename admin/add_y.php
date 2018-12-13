<?php
include("functions/conn.php");
//监听提交按钮
if(isset($_POST["submit"])&&$_POST["submit"]=="提交"){
	//从注册页面接收数据
	$user=$_POST["user"];
    $pwd=$_POST["pwd"];
	//存入数据库
	$sql = "INSERT INTO tb_users (id, username, password)
	VALUES (null, '$user', '$pwd')";
	if ($conn->query($sql) === TRUE) {
		$hello = '恭喜您，注册成功！';
        echo "<script> alert('{$hello}');location.href='query_y.php'; </script>";
	} else {
	    echo "新记录插入错误！Error: " . $sql . "<br>" . $conn->error;
	}
}
//关闭连接
$conn->close();
?>