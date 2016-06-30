<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#red"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline"><a href="homework_register.php">註冊</a> | <a href="homework_login.php">登入</a> | <a href="homework_secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>


</body>
</html>
<?php
if(isset($_COOKIE['Account'])&&isset($_COOKIE['Password']))
  header("location:homework_index_for_secret.php");
  exit();
  ?>