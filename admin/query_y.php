<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户管理</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">

</head>
<?php
		require_once("functions/conn.php");
		$sql="select * from tb_users";
		$result = mysqli_query($conn,$sql); 
		
	?>

<body leftmargin="8" topmargin="8" background='skin/images/allbg.gif'>

<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#003399" align="center">
<tr>
 <td height="26" background="skin/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center" style="padding-top: 20px; color: white;">
  	<h3 style="color: white; margin-bottom: 12px;">用户管理</h3>  
  </td>
 </tr>
</table>
</td>
</tr>
</table>
  
<!--  内容列表   -->
<form name="form2" method="get" action="">

<table width="75%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="skin/images/tbg.gif" >&nbsp;&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	
	<td width="15%">id号</td>
	<td width="15%">用户名</td>
	<td width="15%">操作1</td>
	<td width="15%">操作2</td>
	<!--<td width="10%"></td>
	<td width="10%"></td>
	<td width="10%"></td>
	<td width="10%"></td>-->
</tr>
	


	<?php
		while($rows=mysqli_fetch_array($result))
		{		
	?>
	<tr>
		<td height="21" bgcolor="#fff"><div align="center"><?php echo $rows['id']; ?></td>
		<td height="21" bgcolor="#fff"><div align="center"><?php echo $rows['username']; ?></td>
		<td width="4%" align="center" bgcolor="#fff"><a href="delete_y.php?id=<?php echo $rows["id"]; ?>" onclick="if( confirm('确定要删除用户吗？',)) return true; else return false;">删除</a></td>
		<td width="4%" align="center" bgcolor="#fff"><a href="update_y.php?id=<?php echo $rows["id"]; ?>" onclick="if( confirm('确定要修改用户吗？',)) return true; else return false;">修改</a></td>
		<!--<td height="21" bgcolor="#fff"><div align="center"></td>
		<td height="21" bgcolor="#fff"><div align="center"></td>
		<td height="21" bgcolor="#fff"><div align="center"></td>
		<td height="21" bgcolor="#fff"><div align="center"></td>-->
		
	<?php
		}
	?>
</tr>
	
</table>

</form>

<!--  搜索表单  -->
<form name='form3' action='' method='get'>
<input type='hidden' name='dopost' value='' />
<table width='98%'  border='0' cellpadding='1' cellspacing='1' bgcolor='#CBD8AC' align="center" style="margin-top:8px">
  <tr bgcolor='#EEF4EA'>
    <td background='skin/images/wbg.gif' align='center'>
      <table border='0' cellpadding='0' cellspacing='0'>
        <tr>
          <td width='90' align='center'>搜索条件：</td>
          <td width='160'>
          <select name='cid' style='width:150'>
          <option value='0'>选择类型...</option>
          	<option value='1'>名称</option>
          </select>
        </td>
        <td width='70'>
          关键字：
        </td>
        <td width='160'>
          	<input type='text' name='keyword' value='' style='width:150px' />
        </td>
        <td width='110'>
    		<select name='orderby' style='width:80px'>
            <option value='id'>排序...</option>
            <option value='pubdate'>发布时间</option>
      	</select>
        </td>
        
       </tr>
      </table>
    </td>
  </tr>
</table>
</form>
</body>
</html>