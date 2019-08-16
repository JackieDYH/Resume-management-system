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
		  $userid = $_GET['userid'];
		  
		  $sql="select * from resume where id=$userid";
		  
		  $query=mysql_query($sql); // 执行SQL主句
		  $rows=mysql_fetch_array($query); 
		?>
<form id="form1" name="form1" method="post" action="" onsubmit="return(CheckInput());" style="margin-top:0px;">
  <table width="100%" border="1" align="center" style="text-align:center" cellpadding="5" cellspacing="0" bordercolor="#FF0000" bgcolor="#FFFFFF">
    <tr>
      <td colspan="7" align="right" bgcolor="#FFFFFF"><a href="index.php">返回首页</a>&nbsp;&nbsp;</td>
    </tr>
    <tr>
    <th colspan="7">个人简历表</th>
  </tr>
  <tr>
    <td width="84">姓名</td>
    <td width="84"><?php echo $rows["name"]?></td>
    <td width="84">性别</td>
    <td width="84"><?php echo $rows["sex"]?></td>
    <td width="84">民族</td>
    <td width="130"><?php echo $rows["nation"]?></td>
    <td width="130" rowspan="4"><img id="photo" width="100" height="120" src="<?php echo $rows["photo"]?>"/></td>
  </tr>
  <tr>
    <td>籍贯</td>
    <td><?php echo $rows["birthplace"]?></td>
    <td>政治面貌</td>
    <td><?php echo $rows["political"]?></td>
    <td>出生年月日</td>
    <td><?php echo $rows["birthday"]?></td>
  </tr>
  <tr>
    <td>英语水平</td>
    <td><?php echo $rows["englishlevel"]?></td>
    <td>计算机水平</td>
    <td><?php echo $rows["computerlevel"]?></td>
    <td>身份证号</td>
    <td><?php echo $rows["idcard"]?></td>
  </tr>
  <tr>
    <td>学历</td>
    <td><?php echo $rows["diploma"]?></td>
    <td>专业</td>
    <td><?php echo $rows["discipline"]?></td>
    <td>毕业学校</td>
    <td><?php echo $rows["school"]?></td>
  </tr>
  <tr>
    <td>联系地址</td>
    <td colspan="4"><?php echo $rows["address"]?></td>
    <td>联系电话</td>
    <td><?php echo $rows["tel"]?></td>
  </tr>
  <tr>
    <td colspan="7">个人简历</td>
  </tr>
  <tr>
    <td colspan="7"><?php echo $rows["content"]?></td>
  </tr>
  </table>
</form></td>
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
        <td height="55" align="center" class="wfont"><?php echo $db->ly_system("system",60)?>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
