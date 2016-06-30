<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="homework_index_for_secret.php">
<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員專用頁</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline"><input type="submit" name="btnOK" id="btnOK" value="登出" /> |<a href="homework_secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>


</body>
</html>
<?php
if(isset($_POST['btnOK']))
{
  setcookie("Account",'',time());
  setcookie("Password",'',time());
  header("location:homework_index.php");
}
?>