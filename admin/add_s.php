<?php
	include("functions/conn.php");
?>

<table width="50%" border="0" cellpadding="2" cellspacing="1" bgcolor="#003399" align="center" style="margin-top:8px">
<form name="form3" method="post" action="">
	<tr bgcolor="#D1DDAA" style="text-align: center; color: azure; background-color: #003399;">
		<td height="24" colspan="10" background="skin/images/tbg.gif">&nbsp;添加商品&nbsp;</td>
	</tr>

	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>商品名称:</label>
		</td>
		<td width="35%">
			<input type="text" name="spname" id="spname"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>商品价格:</label>
		</td>
		<td width="35%">
			<input type="text" name="spjg" id="spjg"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>上架时间:</label>
		</td>
		<td width="35%">
			<input type="text" name="sfsj" id="sfsj"/>
		</td>
	</tr>
	
	<tr>
        <td height="40">&nbsp;</td>
        <td height="40" colspan="2" >
        	<input type="submit" name="Submit" id="Submit" value="提交" style="width:130px; height:30px;"/>
        </td>
      </tr>
	</form>
</table>


<?php
	
if(isset($_POST["Submit"]))
	{	$spname=$_POST["spname"];
		$spjg=$_POST["spjg"];
		$sfsj=$_POST["sfsj"];			
					$sql2="insert into tb_shopping (sname,sjiage,ssj) values ('$spname','$spjg','$sfsj')"; 	
					$result=mysqli_query($conn,$sql2);
					if($result)
					{
						echo "<script language=javascript>alert('添加商品成功！');location.href='query_s.php';</script>";
						exit();
					}
					else
					{ echo '<script language="javascript">alert("添加失败，请返回");history.back();</script>';	}
				}
?>