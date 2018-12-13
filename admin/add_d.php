<?php
	include("functions/conn.php");
?>

<table width="50%" border="0" cellpadding="2" cellspacing="1" bgcolor="#003399" align="center" style="margin-top:8px">
<form name="form3" method="post" action="">
<tr bgcolor="#D1DDAA" style="text-align: center; color: azure; background-color: #003399;">
	<td height="24" colspan="10" background="skin/images/tbg.gif">&nbsp;添加订单信息&nbsp;</td>
</tr>

	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>订单号:</label>
		</td>
		<td width="35%">
			<input type="text" name="ddnum" id="ddnum"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>收货人:</label>
		</td>
		<td width="35%">
			<input type="text" name="xhr" id="xhr"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>地址:</label>
		</td>
		<td width="35%">
			<input type="text" name="dz" id="dz"/>
		</td>
	</tr>
	
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>联系方式:</label>
		</td>
		<td width="35%">
			<input type="text" name="phone" id="phone"/>
		</td>
	</tr>
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>下单时间:</label>
		</td>
		<td width="35%">
			<input type="text" name="xdtime" id="xdtime"/>
		</td>
	</tr>
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>价格:</label>
		</td>
		<td width="35%">
			<input type="text" name="jg" id="jg"/>
		</td>
	</tr>
	<tr align="center" bgcolor="#FAFAF1" height="22">
		<td width="20%">
			<label>收货方式:</label>
		</td>
		<td width="35%">
			<input type="text" name="sh" id="sh"/>
		</td>
	</tr>
	<tr>
        <td height="40">&nbsp;</td>
        <td height="40" colspan="2"><input type="submit" name="Submit" id="Submit" value="提交" style="width:130px; height:30px;   "/></td>
      </tr>
	</form>
</table>


<?php
	
if(isset($_POST["Submit"]))
	{	$ddnum=$_POST["ddnum"];
		$xhr=$_POST["xhr"];
		$dz=$_POST["dz"];
		$phone=$_POST["phone"];
		$xdtime=$_POST["xdtime"];
		$jg=$_POST["jg"];
		$sh=$_POST["sh"];
						
					$sql2="insert into tb_dingdan (id,order_mens,address,tel,time,price,way) values ('$ddnum','$xhr','$dz','$phone','$xdtime','$jg','$sh')"; 	
					$result=mysqli_query($conn,$sql2);
					if($result)
					{
						echo "<script language=javascript>alert('添加订单成功！');location.href='query_d.php';</script>";
						exit();
					}
					else
					{ echo '<script language="javascript">alert("添加失败，请返回");history.back();</script>';	}
				}
?>