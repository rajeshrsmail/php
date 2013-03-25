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
<table width="329" border="1">
  <tr>
    <td width="153">ID</td>
   <td width="160"><input type="text" name="t1" id="t1" value="<?php echo "$dd[0]";?>" readonly></td>
   </tr>
   
   <tr>
    <td>Name</td>
    <td>
      <input type="text" name="t2" id="t2" value=" <?php echo "$dd[1]"; ?>  "></td>
    </tr>
    
    <tr>
    <td>Phone</td>
    <td>
      <input type="text" name="t3" id="t3" value=" <?php echo "$dd[2]"; ?>  " ></td>    
    </tr>
    
    <tr>
    <td>Email</td>
    <td>
      <input type="text" name="t4" id="t4" value="<?php echo "$dd[3]"; ?>"></td>
    </tr>
    
    <tr>
    <td>Notes</td>
    <td>
      <textarea name="t5" id="t5" cols="45" rows="5"><?php echo "$dd[4]"; ?></textarea></td>
  </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="t6" id="t6" value="Update">
      </div></td>
    </tr> 
    
    
    
   
</table>

<?php
if(isset($_REQUEST['t6']))
{
$k1=$_REQUEST['t1']; 
$k2=$_REQUEST['t2'];
$k3=$_REQUEST['t3'];
$k4=$_REQUEST['t4'];
$k5=$_REQUEST['t5'];
 

mysql_query("update phonelist set Name='$k2', Phone='$k3', Email='$k4', Notes='$k5' where ID=$k1");
echo $cc;
if (mysql_affected_rows() >=1) 
	echo "inserted"; 
	else
 	echo "not inserted";
}

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>


 

 
 