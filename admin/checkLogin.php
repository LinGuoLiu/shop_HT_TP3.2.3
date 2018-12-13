<?php
	include("functions/conn.php");
	if(isset($_POST['Submit']))
	{ 
		$code=$_POST["code"];
	if(!session_id()) session_start();

	if(strtolower($code)<>strtolower($_SESSION["yzm"]))
	{
		
		echo '<script language="JavaScript">alert("验证码不正确");history.back();</script>';
		return;
	}
	//接收用户输入的用户名和密码
		$userName=$_POST['userName'];
		$password=$_POST['password'];
		//根据用户输入的用户名，检索数据库的数据
		$query_sql="select * from tb_users where username='".$userName."'";						
		$result=mysqli_query($conn,$query_sql);
		$nums=mysqli_num_rows($result);		
		
		if($nums!=0)
		{//检索到用户存在
			$rows=mysqli_fetch_array($result);			
			if($rows['password']==md5($password))
			{//密码正确 		
				session_start();  //启动session  当用户在应用程序的 Web 页之间跳转时，存储在 Session 对象中的变量将不会丢失，而是在整个用户会话中一直存在下去。
				$_SESSION['username']=$userName;  //定义session变量，存放用户名
				$_SESSION['islogin']=true;		     //定义session变量，存放登录标志
				
				echo'用户登录成功！';//跳转页面，注意路径
				header("location:index.html");
			/*	//echo "<script>alert('恭喜你注册成功,马上进入主页面');location='index.php';</script>";	*/				
				exit; 
			} 
		  else{
				echo '<script language=javascript>alert("密码错误");history.back();</script>';
			}	
		}
		else
		{//无返回数据，用户不存在
			echo '<script language=javascript>alert("用户名不存在");history.back();</script>';
		}
	}
	
?>
