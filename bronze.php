
<?php
mysql_connect("localhost","copper","copper") or die(mysql_error());
mysql_select_db("copper");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Enter ID</td>
      <td><select name="id1" id="id1">
      
      <?php
	  
	  $a=mysql_query("select id from tb1");
	  while($b=mysql_fetch_row($a))
	  {
	  
	  echo "<option value='$b[0]'>$b[0]</option>";
	  }
      ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Submit">
      </div></td>
    </tr>
  </table>
  <p>
    <?php
  if(isset($_REQUEST['submit']))
   $da=$_REQUEST['id1'];

  $sql_query=mysql_query("select * from tb1 where id=$da");
  $db=mysql_fetch_row($sql_query); 
   
  
  ?>
  </p>
  <p>&nbsp;</p>
  <table width="271" border="1">
    <tr>
      <td width="163">ID</td>
      <td width="98"><?php echo "$db[0]"; ?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo "$db[1]"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$db[2]"; ?></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><?php echo "$db[3]"; ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo "$db[4]"; ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo "$db[5]"; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>