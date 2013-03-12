<?php
mysql_connect("localhost","abcdbusr","abcd1234");
mysql_db_connect("abcddb");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <th width="46" scope="row">Name</th>
      <td width="144"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td><input type="text" name="phone" id="phone"></td>
    </tr>
  </table>
  
  <?php
  
  mysql_query("insert into tb1 values('name','email','phone')");
  if(mysql_affected_rows() >=1)
  echo "inserted <br>";
  else
  echo "not inserted <br>";
  
  ?>
</form>
</body>
</html>