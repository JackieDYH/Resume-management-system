<?php require_once('ly_check.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����޸�</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$password=$_SESSION["pwd"];
$sql="select * from admin where password='$password'";
$rs=mysql_query($sql);
$rows=mysql_fetch_assoc($rs);
if($_POST["Submit"])
	{
if($rows["password"]==$_POST["password"])
		{
		$password2=$_POST["password2"];
        $sql="update admin set password='$password2' where id=1";
		mysql_query($sql);
		echo "<script language=javascript>alert('�޸ĳɹ�,�����½��е�½��');window.location='login.php'</script>";
		exit();
		}
		else
?>
		<?php	
		{
?>
		<script language="javascript">
			alert("ԭʼ���벻��ȷ,����������")
			location.href="renpassword.php";
		</script>
		<?php
		}
		}
		?>

<table cellpadding="3" cellspacing="1" border="0" width="100%" class="table" align=center>
  <form name="renpassword" method="post" action="">
    <tr> 
      <th height=25 colspan=4 align="center" class="bg_tr">���Ĺ�������</th>
    </tr>
    <tr> 
      <td width="40%" align="right" class="td_bg">�û�����</td>
      <td width="60%" class="td_bg"><?php echo $rows["username"] ?></td>
    </tr>
    <tr> 
      <td align="right" class="td_bg">ԭ���룺</td>
      <td class="td_bg"><input name="password" type="password" id="password" size="20"></td>
    </tr>
    <tr> 
      <td align="right" class="td_bg">�����룺</td>
      <td class="td_bg"><input name="password1" type="password" id="password1" size="20"></td>
    </tr>
    <tr> 
      <td align="right" class="td_bg">ȷ�����룺</td>
      <td class="td_bg"><input  name="password2" type="password" id="password2" size="20"></td>
    </tr>
    <tr> 
      <td colspan="2" align="center" class="td_bg"> 
        <input class="button" onClick="return check();" type="submit" name="Submit" value="ȷ������">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
<script LANGUAGE="javascript">
<!--
function checkspace(checkstr) {
  var str = '';
  for(i = 0; i < checkstr.length; i++) {
    str = str + ' ';
  }
  return (str == checkstr);
}
function check()
{
  if(checkspace(document.renpassword.password.value)) {
	document.renpassword.password.focus();
    alert("ԭ���벻��Ϊ�գ�");
	return false;
  }
  if(checkspace(document.renpassword.password1.value)) {
	document.renpassword.password1.focus();
    alert("�����벻��Ϊ�գ�");
	return false;
  }
    if(checkspace(document.renpassword.password2.value)) {
	document.renpassword.password2.focus();
    alert("ȷ�����벻��Ϊ�գ�");
	return false;
  }
    if(document.renpassword.password1.value != document.renpassword.password2.value) {
	document.renpassword.password1.focus();
	document.renpassword.password1.value = '';
	document.renpassword.password2.value = '';
    alert("�������ȷ�����벻��ͬ������������");
	return false;
  }
	document.admininfo.submit();
  }
//-->
</script> 
