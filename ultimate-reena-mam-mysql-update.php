
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
 {
   $da=$_REQUEST['id1'];

  $sql_query=mysql_query("select * from tb1 where id=$da");
  $db=mysql_fetch_row($sql_query); 
   
  
  ?>
  </p>
  <p>&nbsp;</p>
  <table width="344" border="1">
    <tr>
      <td width="163">ID</td>
      <td width="98">
        <label>
        <input name="t1" type="text" id="t1" value="<?php echo "$db[0]"; ?>" readonly="">
      </label></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>
        <label>
        <input name="t2" type="text" id="t2" value="<?php echo "$db[1]"; ?>">
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>
        <label>
        <textarea name="t3" id="t3"><?php echo "$db[2]"; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Place</td>
      <td>
        <label>
        <select name="t4" id="t4">
		<?php
		$a=array("tvm","chn","blore","other");
		foreach($a as $item)
		{
		if($item==$db[3])
		echo "<option value='$item' selected>$item</option>";
		else
		echo "<option value='$item'>$item</option>";
		}		
		?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php
	  if($db[4]=="male")
	  {
	   ?>
        <input name="r" type="radio" value="male" checked="checked">
        Male
        <input name="r" type="radio" value="female">
        Female
		<?php
		}
		else
		{
		?>
		 <input name="r" type="radio" value="male">
        Male
        <input name="r" type="radio" value="female" checked="checked">
        Female
		<?php
		}
		?>
</td>
    </tr>
    <tr>
      <td>Username</td>
      <td>
        <label>
        <input name="t5" type="text" id="t5" value="<?php echo "$db[5]"; ?>">
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input name="s2" type="submit" id="s2" value="Update">
      </label></td>
    </tr>
  </table>
  <?php
  }
  ?>
  <p>&nbsp;</p>
  <?php

  if(isset($_REQUEST['s2']))
  {  
  $a=$_REQUEST['t1'];
  $b=$_REQUEST['t2'];
  $c=$_REQUEST['t3'];
  $d=$_REQUEST['t4'];
  $e=$_REQUEST['r'];
  $f=$_REQUEST['t5'];
  mysql_query("update tb1 set name='$b' , address='$c',place='$d',gender='$e' ,username='$f' where id='$a'");
  }
  ?>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>