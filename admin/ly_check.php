<?php
	require_once("../include/global.php");
	if($_SESSION["admin"]=="")
	{
 	echo "<script language=javascript>alert('�����µ�½��');window.location='login.php'</script>";
	}
?>