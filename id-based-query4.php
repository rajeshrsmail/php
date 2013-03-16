<?php
mysql_connect("localhost","copper4","copper4");
mysql_select_db("copper4");

?>

<!-- What we would do here is ask the user, the ID which he wants to select.  Based on that ID, we will display the corresponding record such as:

ID
Name
Phone
Email
Notes

So, to start with we will create the table which asks the user which ID he wants to choose..-->



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>

<form name="form1" action="" method="post">
<table width="241" border="1">
  <tr>
    <td width="168">Enter ID</td>
    <td width='57'><select name='s1' id="s1">
    <?php 
	$d=mysql_query("select id from phonelist");		 
	while ($e=mysql_fetch_row($d))
	{
  echo "<option value='$e[0]'>$e[0]</option>"; 
	}
	?>
	</select>
	</td>    
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
{
$cc=$_REQUEST['s1']; 
$qq=mysql_query("select * from phonelist where id=$cc");
$dd=mysql_fetch_row($qq);
}
?>
</p>
<table width="200" border="1">
  <tr>
    <td>ID</td>
   <td><?php echo "$dd[0]"; ?></td>
   </tr>
   
   <tr>
    <td>Name</td>
    <td><?php echo "$dd[1]"; ?></td>
    </tr>
    
    <tr>
    <td>Phone</td>
    <td><?php echo "$dd[2]"; ?></td>    
    </tr>
    
    <tr>
    <td>Email</td>
    <td><?php echo "$dd[3]"; ?></td>
    </tr>
    
    <tr>
    <td>Notes</td>
    <td><?php echo "$dd[4]"; ?></td>
  </tr> 
    
    
    
   
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>


 

 
 