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
<script type="text/javascript" src="images/check.js"></script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" align="right" valign="top" background="images/bjl2.jpg">&nbsp;</td>
    <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40" align="center"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
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
                <td>
                 
				 <table width="100%" height="100%" border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td height="470" align="left" valign="top" bgcolor="#FFFFFF">
		  <?php
	if($_POST["Submit"])
	{
		$name=$_POST["name"];
		$sex=$_POST["sex"];
		$nation=$_POST["nation"];
		$birthplace=$_POST["birthplace"];
		$political=$_POST["political"];
		$birthday=$_POST["birthday"];
		$englishlevel=$_POST["englishlevel"];
		$computerlevel=$_POST["computerlevel"];
		$idcard=$_POST["idcard"];
		$address=$_POST["address"];
		$tel=$_POST["tel"];
		$content=$_POST["content"];
		$diploma=$_POST["diploma"];
		$discipline=$_POST["discipline"];
		$school=$_POST["school"];
		$photo=$_POST["photo"];
		echo($picName);
		$sql="insert into resume (name,sex,nation,birthplace,political,birthday,englishlevel,computerlevel,idcard,address,tel,content,diploma,discipline,school,photo) values ('$name','$sex','$nation','$birthplace','$political','$birthday','$englishlevel','$computerlevel','$idcard','$address','$tel','$content','$diploma','$discipline','$school','$photo')";
		mysql_query($sql);
		echo "<script language=javascript>alert('���ļ������ύ�ɹ�');window.location='index.php'</script>";
		?>
		<?php
	}
?>
<form id="form1" name="form1" method="post" action="" onsubmit="return(CheckInput());" style="margin-top:0px;">
 <input type="hidden" name="photo" id="photo1" />
  <table width="100%" border="1" align="center" style="text-align:center" cellpadding="5" cellspacing="0" bordercolor="#FF0000" bgcolor="#FFFFFF">
    <tr>
      <td colspan="7" align="right" bgcolor="#FFFFFF"><a href="index.php">������ҳ</a>&nbsp;&nbsp;</td>
    </tr>
    <tr>
    <th colspan="7">���˼�����</th>
  </tr>
  <tr>
    <td width="84">����</td>
    <td width="84"><input name="name" type="text" style="width:100%" ></td>
    <td width="84">�Ա�</td>
    <td width="84"><input name="sex" type="text" style="width:100%"></td>
    <td width="84">����</td>
    <td width="130"><input name="nation" type="text" style="width:100%"></td>
    <td width="130" rowspan="4"><img id="photo" width="100" height="120" /></td>
  </tr>
  <tr>
    <td>����</td>
    <td><input name="birthplace" type="text" style="width:100%"></td>
    <td>������ò</td>
    <td><input name="political" type="text" style="width:100%"></td>
    <td>����������</td>
    <td><input name="birthday" type="text" style="width:100%"></td>
  </tr>
  <tr>
    <td>Ӣ��ˮƽ</td>
    <td><input name="englishlevel" type="text" style="width:100%"></td>
    <td>�����ˮƽ</td>
    <td><input name="computerlevel" type="text" style="width:100%"></td>
    <td>���֤��</td>
    <td><input name="idcard" type="text" style="width:100%"></td>
  </tr>
  <tr>
    <td>ѧ��</td>
    <td><input name="diploma" type="text" style="width:100%"></td>
    <td>רҵ</td>
    <td><input name="discipline" type="text" style="width:100%"></td>
    <td>��ҵѧУ</td>
    <td><input name="school" type="text" style="width:100%"></td>
  </tr>
  <tr>
    <td>��ϵ��ַ</td>
    <td colspan="4"><input name="address" type="text" style="width:100%"></td>
    <td>��ϵ�绰</td>
    <td><input name="tel" type="text" style="width:100%"></td>
  </tr>
  <tr>
    <td colspan="7">���˼���</td>
  </tr>
  <tr>
    <td colspan="7"><textarea name="content" cols="100%" rows="5"></textarea></td>
  </tr>
  <tr>
      <td colspan="7" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="�ύ" />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form></td>
        </tr>
      </table>
	  
	  <tr>
      <td  colspan="7" align="center" bgcolor="#FFFFFF">
	  <form name="frm" method="post" enctype="multipart/form-data">
		<font style="letter-spacing:1px" color="#FF0000">*ֻ�����ϴ�jpg|png|bmp|jpeg|gif��ʽ��ͼƬ</font><br/><br/>
		��ѡ��ͼƬ��
		<input name='upfile' type='file'/>
		<input name="btn" type="submit" value="�ϴ�" /><br />
	  </form>
	  </td>
	  <?php
//ȫ�ֱ���
$arrType=array('image/jpg','image/gif','image/png','image/bmp','image/jpeg');
$max_size='500000';      // ����ļ����ƣ���λ��byte��
$upfile='photo'; //ͼƬĿ¼·��
$file=$_FILES['upfile'];
  
   if($_SERVER['REQUEST_METHOD']=='POST'){ //�ж��ύ��ʽ�Ƿ�ΪPOST
  if(!file_exists($upfile)){  // �жϴ���ļ�Ŀ¼�Ƿ����
   mkdir($upfile,0777,true);
   } 
      $imageSize=getimagesize($file['tmp_name']);
   $img=$imageSize[0].'*'.$imageSize[1];
   $fname=$file['name'];
   $ftype=explode('.',$fname);
   $picName=$upfile."/".$fname;
   move_uploaded_file($file['tmp_name'],$picName);
   echo "<script language=javascript>document.getElementById('photo').src='$picName';document.getElementById('photo1').value='$picName'</script>";
     }
?>
    </tr>
				  
				 
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
        <td height="55" align="center" class="wfont"><?php echo $db->ly_system("system",60)?>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
