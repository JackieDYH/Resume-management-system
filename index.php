<?php
	require("include/global.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $db->ly_system("system",2)?></title>
<META name=keywords content="<?php echo $db->ly_system("system",3)?>">
<meta name="description" content="<?php echo $db->ly_system("system",4)?>">
<link href="images/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" align="right" valign="top" background="images/bjl2.jpg">&nbsp;</td>
    <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="48" height="28" background="images/ttl1.jpg">&nbsp;</td>
            <td align="center" background="images/ttm.jpg" class="wfont"></td>
            <td width="43" height="28" background="images/ttr1.jpg">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="350" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="0">
			<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="18" height="16" align="right" valign="bottom"><img src="images/1.jpg" width="18" height="16" /></td>
                <td height="12" background="images/1r.jpg">&nbsp;</td>
                <td width="17" height="16" align="left" valign="bottom"><img src="images/2.jpg" width="17" height="16" /></td>
              </tr>
              <tr>
                <td width="13" background="images/4s.jpg">&nbsp;</td>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="7"></td>
                  </tr>
                </table>
<form id="form1" name="form1" method="post" action="" style="margin-top:0px;">
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="1" bordercolor="#000000" bgcolor="#CCCCCC">
<tr>
	<td colspan="3" align="right" bgcolor="#FFFFFF">
	<a href="fk1.php">��д����</a>&nbsp;&nbsp;</td>
</tr>
<tr>
	<td colspan="3" align="center" bgcolor="#FFFFFF">������<input name="username" type="text" style="width:30%">&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="����"></td>
</tr>
 <?php
//ʹ�÷�����
if(true) {
global $uu;
$uu = $_POST["username"];
 $username = $uu;
 if(!empty($username)){
 $sql="select * from resume where name like '%$username%' order by id desc"; // ��ѯ�����ݿ��
 }else{
 $sql="select * from resume order by id desc"; // ��ѯ�����ݿ�� 
 }
 $queryc=mysql_query($sql); //ִ��SQL���
 $nums=mysql_num_rows($queryc); ////����Ŀ��
 $each_disNums=$page=$db->ly_system("system",6);  //ÿҳ��ʾ����Ŀ�� 
 $sub_pages=2; //�� $subPage_type Ϊ 2 ʱ��ÿ����ʾ��ҳ��
 $pageNums = ceil($nums/$each_disNums); //��ҳ��
 $subPage_link="index.php?username=$username&page="; //ÿ����ҳ������
 $subPage_type=1;//Ϊ1ʱ,��ʾ���1,Ϊ2ʱ,��ʾ���2,��ʾ��ҳ������
 $current_page=$_GET['page']!=""?$_GET['page']:1; //��ǰ��ѡ�е�ҳ
 $currentNums=($current_page-1)*$each_disNums; //limit��������
 if(!empty($username)){
 $sql="select * from resume where name like '%$username%' order by id desc limit $currentNums,$each_disNums"; //SQL��䣬�˴���ҳ����
 }else{
 $sql="select * from resume order by id desc limit $currentNums,$each_disNums"; //SQL��䣬�˴���ҳ����
 }
 $query=mysql_query($sql); // ִ��SQL����
 while($rows=mysql_fetch_array($query)){
 ?>
  <tr>
    <td width="101" rowspan="2" align="center" bgcolor="#FFFFFF"><img width="30" height="35" src="<?php echo $rows["photo"]?>" /></td>
    <td width="304" align="left" bgcolor="#FFFFFF">����:<a href="show.php?userid=<?php echo $rows["id"]?>"><font color=red><?php echo $rows["name"]?><font><a></td>
    <td width="211" align="left" bgcolor="#FFFFFF">��ϵ�绰:<?php echo $rows["tel"]?></td>
  </tr>
  <tr>
  	<td colspan="3" bgcolor="#FFFFFF" height="15"></td>
  </tr>
	<?php
	}
	}
  ?>
</table>
</form>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" align="center"><?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?></td>
  </tr>
</table>
</td>
<td background="images/2x.jpg">&nbsp;</td>
              </tr>
              <tr>
                <td width="18" height="15" align="right" valign="top"><img src="images/4.jpg" width="18" height="15" /></td>
                <td height="12" background="images/3z.jpg">&nbsp;</td>
                <td width="17" height="15" align="left" valign="top"><img src="images/3.jpg" width="17" height="15" /></td>
              </tr>
            </table>
			  </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="108" align="left" valign="top" background="images/bjr2.jpg">&nbsp;</td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="114" valign="top" background="images/xm.jpg"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="55" align="center" class="wfont"><?php echo $db->ly_system("system",60)?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
