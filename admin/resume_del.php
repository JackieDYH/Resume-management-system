<?php
    require_once('ly_check.php');
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	$sql="delete from resume where id=$id";
	mysql_query($sql);
	echo "<script language=javascript>alert('ɾ���ɹ���');window.location='resume_admin.php?pageno=$pageno'</script>";
?>
