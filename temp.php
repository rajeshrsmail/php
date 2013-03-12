<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
mysql_connect("localhost","abcddbusr","abcd1234");
mysql_select_db("abcddb");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>



<body>
<form id="form1" name="form1" method="post" action="">
  <table width="212" border="0">
    <tr>
      <th width="67" scope="row">Name</th>
      <td width="135"><input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td><input type="text" name="phone" id="phone" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="OK" /></th>
    </tr>
  </table>
  
  <?php
  
  if(isset($_REQUEST['submit']))
  {
  $a=$_REQUEST['name'];
  $b=$_REQUEST['phone'];
  mysql_query("insert into tb1 values(NULL,'$a','$b')");
  if (mysql_affected_rows() >=1)
  echo "inserted";
  else
  echo "not inserted";
  }
  ?>
  
</form>
</body>
</html>
