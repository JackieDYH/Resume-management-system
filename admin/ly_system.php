<?php
require_once('ly_check.php');
?>
<?php
	if($_POST["submit"])
	{
		$name=$_POST["name"];
		$title=$_POST["title"];
		$keywords=$_POST["keywords"];
		$smalltext=$_POST["smalltext"];
		$url=$_POST["url"];
		$page=$_POST["page"];
		$is_audit=$_POST["is_audit"];
		$is_html=$_POST["is_html"];
		$copyright=$_POST["copyright"];
		$sql="update system set name='$name',title='$title',keywords='$keywords',smalltext='$smalltext',url='$url',page='$page',is_audit='$is_audit',is_html='$is_html',copyright='$copyright'";
		mysql_query($sql);
		echo "<script language=javascript>alert('�޸ĳɹ���');window.location='ly_system.php'</script>";
		exit();
		}
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>ϵͳ����</title>
	<link rel="stylesheet" href="images/css.css" type="text/css">
        <script type="text/javascript" src="<?php echo FCK_DIR?>/fckeditor.js"></script>
    <style type="text/css">
<!--
.reds {
	color: #F00;
}
-->
    </style>
	</head>
<body>
<?php
$sql="select * from system";
$rs=mysql_query($sql);
$rows=mysql_fetch_assoc($rs);
?>
<form action="" method="post" name="60ie" id="60ie">
			<table width="100%" border=0 align=center cellpadding=5 cellspacing=1 class="table">
				<tr>
					<th colspan="2" align="center" class="bg_tr">ϵͳ�����޸�</th>
				</tr>
                	
				<tr>
					<td class="td_bg">
						��վ���ƣ�					</td>
					<td class="td_bg">
						<input name="name" type="text" id="name" style="width: 350px;" value="<?php echo $rows["name"];?>" />
				  (����д��վ������)</td>
				</tr>
                <tr>
				  <td class="td_bg">��վ���⣺				  </td>
			    <td class="td_bg">
						<input name="title" type="text" id="title" style="width: 350px;" value="<?php echo $rows["title"];?>" />
				  (����д��վ����) </td>
				</tr>
                <tr>
					<td class="td_bg">�ؼ��֣�					</td>
			    <td class="td_bg">
						<input name="keywords" type="text" id="keywords" style="width: 350px;" value="<?php echo $rows["keywords"];?>" />
				  (����д�ؼ���) </td>
				</tr>
                <tr>
				  <td class="td_bg">��վ������				  </td>
			    <td class="td_bg">
						<input name="smalltext" type="text" id="smalltext" style="width: 350px;" value="<?php echo $rows["smalltext"];?>" />
				  (����д��վ������200������) </td>
				</tr>
				<tr>
                  <td class="td_bg">��վ��ַ�� </td>
				  <td class="td_bg"><input name="url" type="text" id="url"
							style="width: 350px;" value="<?php echo $rows["url"];?>" />
				    (��վ���� �����<span class="reds">'/</span>' �磺http://www.xiariboke.com/)</td>
			  </tr>
				<tr>
				  <td class="td_bg">ÿҳ��ʾ������</td>
				  <td class="td_bg"><input name="page" type="text" id="page"
							style="width:50px;" value="<?php echo $rows["page"];?>" size="5" />
(����д������) </td>
			  </tr>
				
				<tr>
					<td align="left" valign="top" class="td_bg" style="padding-top: 7px;">
						��Ȩ��Ϣ��					</td>
					<td class="td_bg">
					<textarea name="copyright" cols="50" rows="5" id="copyright"><?php echo $rows["copyright"];?></textarea></td>
				</tr>
				<tr>
					<td class="td_bg" width="11%">&nbsp;					</td>
					<td width="89%" class="td_bg">
						<input name="submit" type="submit" class="button" id="submit" value="�ύ" />
						<input name="Reset" type="reset" class="button" id="Reset"
							value="����" />				  </td>
				</tr>
		  </table>
</form>
     	</body>
</html>
