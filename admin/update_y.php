
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户管理</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">

</head>
<body>

<?php
	include("functions/conn.php");
	@$id=$_GET['id'];
	$sql="select * from tb_users where id=$id";
	$result=mysqli_query($conn,$sql);
	@$rows = mysqli_fetch_array($result);	
	
?>



<table width="50%" border="0" cellpadding="2" cellspacing="1" bgcolor="#003399" align="center" style="margin-top:8px">
<form name="form3" method="post" action="">
<tr bgcolor="#D1DDAA" style="text-align: center; color: azure;">
	<td height="24" colspan="10" background="skin/images/tbg.gif" style="background-color: #003399;">&nbsp;修改用户信息&nbsp;</td>
</tr>

	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>id号:</label>
		</td>
		<td width="35%">
			<?php echo $rows['id'];?>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>用户名:</label>
		</td>
		<td width="35%">
			<input type="text" name="user" id="user"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>密码:</label>
		</td>
		<td width="35%">
			<input type="text" name="new_pwd" id="new_pwd"/>
		</td>
	</tr>
	
	<tr>
        <td height="40">&nbsp;</td>
        <td height="40" colspan="2"><input type="submit" name="Submit" id="Submit" value="提交" style="width:130px; height:30px;   "/></td>
      </tr>
	</form>
</table>

<?php
if(isset($_POST["Submit"])){
	
	$user=$_POST["user"];
	$new_pwd=$_POST["new_pwd"];
	if($id=$_GET['id']){
	$sql2="update tb_users set username='".$user."',password='".$new_pwd."' where id=$id";		
	$result2=mysqli_query($conn,$sql2);
	
			if($result2)
			{
				echo "<script language=javascript>alert('修改成功！');location.href='query_y.php';</script>";
				exit();
			}
			else
			{
				echo "<script language=javascript>alert('修改失败！');history.back();</script>";
				exit();
			}				
}
}
?>

</body>
</html>







