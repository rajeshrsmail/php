<?php
mysql_connect("localhost","copper","copper") or die(mysql_error());
mysql_select_db("copper");
?>

<html>
<form id="form1" name="form1" method="post" action="">
  <table width="262" border="1">
    <tr>
      <th width="95" scope="row">Name</th>
      <td width="157"><input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><textarea name="address" cols="45" rows="5" maxlength="100" id="address"></textarea></td>
    </tr>
    <tr>
      <th scope="row">Place</th>
      <td><select name="place" id="place">
        <option>tvm</option>
        <option>chn</option>
        <option>blore</option>
        <option>other</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><p>
          <input type="radio" name="gender" id="radio" value="male" />
        male    </p>
        <p>
          <input type="radio" name="gender" id="radio2" value="female" />
        female</p></td>
    </tr>
    <tr>
      <th scope="row">Username</th>
      <td><input name="username" type="text" id="username" value=" " /></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input name="password" type="password" id="password" value="password" /></td>
    </tr>
    <tr>
      <th scope="row"><input type="submit" name="submit" id="submit" value="Submit" /></th>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
  
    <?php
 
 if (isset($_REQUEST['submit']))
 {
	 $a=$_REQUEST['name'];
	 $b=$_REQUEST['address'];
	 $c=$_REQUEST['place'];
	 $d=$_REQUEST['gender'];
	 $e=$_REQUEST['username'];
	 $f=$_REQUEST['password'];
	 mysql_query("insert into tb1 values(NULL,'$a','$b','$c','$d','$e','$f')");
	 if (mysql_affected_rows() >=1)
	 echo "Inserted";
	 else
	 echo "Not Inserted";
 } 

?>



  
  <p>&nbsp;
  </p>
  <table width="322" border="1">
    <tr>
      <td width="16">ID</td>
      <td width="37">Name</td>
      <td width="51">Address</td>
      <td width="33">Place</td>
      <td width="45">Gender</td>
      <td width="75">Qualification</td>
      <td width="35">Username</td>
    </tr>
    
    <?php

  $query=mysql_query("select * from tb1");
  while ($f_array=mysql_fetch_row($query))
  {

?>
    <tr>
      <td><?php echo "$f_array[0]"; ?></td>
      <td><?php echo "$f_array[1]"; ?></td>
      <td><?php echo "$f_array[2]"; ?></td>
      <td><?php echo "$f_array[3]"; ?></td>
      <td><?php echo "$f_array[4]"; ?></td>
      <td><?php echo "$f_array[5]"; ?></td>
      <td><?php echo "$f_array[6]"; ?></td>
    </tr>
   <?php
   
  }
  ?>
  </table>

</form>


</html>