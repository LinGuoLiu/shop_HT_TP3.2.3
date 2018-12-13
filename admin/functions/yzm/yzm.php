<?php
	session_start();
	$num="";
	$str="abcdefghjklmnopqrstuvwxyz0123456789";
	for ($i=0; $i <4 ; $i++) { 
		$num.=substr($str, rand(0,30),1);
	}
	$_SESSION['yzm']=$num;
	$im=imagecreate(60, 25);
	$bule=imagecolorallocate($im, 28, 155, 226);
	$white=imagecolorallocate($im, 255, 255, 255);
	imagestring($im,5,10,6,$num,$white);
	header('content-type:image/gif');
	imagegif($im);
?>