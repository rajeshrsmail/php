<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
mysql_connect("localhost","abcddbusr","abcd1234");
mysql_select_db("abcddb");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="200" border="0">
  <tr>
    <th scope="row">Enter the ID you wanna search</th>
    <?php


	$a=mysql_query("select * from tb1");
	while ($b=mysql_fetch_row($a));
	{
		echo "<td><option value='$b[0]'>$b[0]</option>"
	}
	?>
    
  </tr>
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="ok"></th>
  </tr>
</table>


	 
</body>
</html>