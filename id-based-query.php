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
 
 
<table border="1" width="200" height="45">
<tr>
 <td>Select the ID  </td>
 <td><select><option value='$b[0]'>

<?php


	$a=mysql_query("select id from tb1");	  
	while ($b=mysql_fetch_row($a))
	{
//		echo "<td><option value='$b[0]'>$b[0]</option></td>";


echo " <option value='$b[0]'> $b[0]</option>" ;
	}
	?>
 </select></td>;
 
</tr>


	
    
  </tr>

  <tr>
    <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="ok"></th>
  </tr>
 
</table>
<p>
  <?php
if (isset($_REQUEST['submit']))
{
$c=$_REQUEST['$b[0]'];
echo $c;
}
else
{
echo "not possible";
}
$d=mysql_query("select * from tb1 where id=$c");
?>
   
   
   
  ?>	 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <th scope="row">ID</th>
      <td>Name</td>
      <td>Phone</td>
    </tr>
    <tr>
    
    while($e=mysql_fetch_row($d))
      {
      
      echo "
      <th scope='row'>$d[0]</th>
      
      <td>$d[1]</td>
            <td>"$d[2]</td>"
      }
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>