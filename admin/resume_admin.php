<?php 
require_once('ly_check.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴����</title>
<link rel="stylesheet" href="images/css.css" type="text/css">
</head>
<body>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table">
  <tr>
    <td class="bg_tr">&nbsp;��������</td>
  </tr>
</table>
<?php
	$sql="select * from resume order by id desc";
	$rs=mysql_query($sql);
	$recordcount=mysql_num_rows($rs);
	$pagesize=4;
	$pagecount=($recordcount-1)/$pagesize+1;
	$pagecount=(int)$pagecount;
	$pageno=$_GET["pageno"];
	if($pageno<1)
	{
		$pageno=1;
	}
	if($pageno>$pagecount)
	{
		$pageno=$pagecount;
	}
	$startno=($pageno-1)*$pagesize;
	$sql="select * from resume order by id desc limit $startno,$pagesize";
	$rs=mysql_query($sql);
?>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="td_bgf">
<?php
	while ($rows=mysql_fetch_assoc($rs))
	{
	?>
<tr>
    <td width="101" rowspan="2" align="center" bgcolor="#FFFFFF"><img width="30" height="35" src="../<?php echo$rows["photo"]?>" /></td>
    <td width="304" align="left" bgcolor="#FFFFFF">����:<a href="show.php?userid=<?php echo $rows["id"]?>"><font color=red><?php echo $rows["name"]?></font><a></td>
    <td width="211" align="left" bgcolor="#FFFFFF">��ϵ�绰:<?php echo $rows["tel"]?></td>
	<td width="100" align="center" bgcolor="#FFFFFF"><input type="button" class="button" onClick="location.href='resume_update.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="�޸�" />&nbsp;&nbsp;&nbsp;
	<input type="button" class="button" onClick="location.href='resume_del.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="ɾ��" /></td>
  </tr>
  <tr>
	<?php
	}
?>
<tr>
<td colspan="4" align="center" class="bg_tr">
<?php
		for($i=1;$i<=$pagecount;$i++)
		{
		?>
		<a href="?pageno=<?php echo $i?>"><?php echo $i?></a>
		<?php
		}
	?>	
	<?php
		if($pageno==1)
		{
		?>
		��ҳ | ��ҳ | <a href="?pageno=<?php echo $pageno+1?>">��ҳ</a> | <a href="?pageno=<?php echo $pagecount?>">ĩҳ</a>
		<?php
		}
		else if($pageno==$pagecount)
		{
		?>
		<a href="?pageno=1">��ҳ</a> | <a href="?pageno=<?php echo $pageno-1?>">��ҳ</a> | ��ҳ | ĩҳ
		<?php
		}
		else
		{
		?>
		<a href="?pageno=1">��ҳ</a> | <a href="?pageno=<?php echo $pageno-1?>">��ҳ</a> | <a href="?pageno=<?php echo $pageno+1?>">��ҳ</a> | <a href="?pageno=<?php echo $pagecount?>">ĩҳ</a>
		<?php
		}
	?></td>
</tr>
</table>
</body>
</html>
