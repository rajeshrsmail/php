
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
  <table width="200" border="1">
    <tr>
      <th width="36" scope="row">ID</th>
      <td width="76"><strong>Name</strong></td>
      <td width="74"><strong>Email</strong></td>
    </tr>
    
    <?php
	
	$a=mysql_query("select * from tb1");
	while ($b=mysql_fetch_row($a))
	{
    echo "<tr>
      <th width='36' scope='row'>$b[0]</th>
      <td width='76'><strong>$b[1]</strong></td>
      <td width='74'><strong>$b[2]</strong></td>
    </tr>";
	 
	}
	?>
    
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html> 