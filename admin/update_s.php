
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文档管理</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">

</head>
<body>

<?php
	include("functions/conn.php");
	@$id=$_GET['id'];
	$sql="select * from tb_shopping where id=$id";
	$result=mysqli_query($conn,$sql);
	@$rows = mysqli_fetch_array($result);	
	
?>



<table width="50%" border="0" cellpadding="2" cellspacing="1" bgcolor="#003399" align="center" style="margin-top:8px">
<form name="form3" method="post" action="">
<tr bgcolor="#D1DDAA" style="text-align: center; color: azure;">
	<td height="24" colspan="10" background="skin/images/tbg.gif" style="background-color: #003399;">&nbsp;修改商品信息&nbsp;</td>
</tr>

	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>商品名称:</label>
		</td>
		<td width="35%">
			<?php echo $rows['sname'];?>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>商品价格:</label>
		</td>
		<td width="35%">
			<input type="text" name="xgjg" id="xgjg"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>是否上架:</label>
		</td>
		<td width="35%">
			<input type="text" name="xgsj" id="xgsj"/>
		</td>
	</tr>
	
	
        <td height="40">&nbsp;</td>
        <td height="40" colspan="2"><input type="submit" name="Submit" id="Submit" value="提交数据" style="width:130px; height:30px;   "/></td>
      </tr>
	</form>
</table>
<?php
if(isset($_POST["Submit"])){
	$xgjg=$_POST["xgjg"];
	$xgsj=$_POST["xgsj"];
	if($id=$_GET['id']){
	$sql2="update tb_shopping set sjiage='".$xgjg."',ssj='".$xgsj."' where id=$id";		
	$result2=mysqli_query($conn,$sql2);
	
			if($result2)
			{
				echo "<script language=javascript>alert('修改成功！');location.href='query_s.php';</script>";
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







