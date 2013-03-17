<?php
mysql_connect("localhost","copper","copper") or die(mysql_error());
mysql_select_db("copper");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>    
<?php
function view($a)
{
  $query=mysql_query("select * from tb1");
  while ($f_array=mysql_fetch_row($query))
  {
?>
    <tr>
      <td><?php echo "$f_array[0] <input type='checkbox' name='ch[]' id='ch[]' value='$f_array[0]' $a/>"; ?></td>
      <td><?php echo "$f_array[1]"; ?></td>
      <td><?php echo "$f_array[2]"; ?></td>
      <td><?php echo "$f_array[3]"; ?></td>
      <td><?php echo "$f_array[4]"; ?></td>
      <td><?php echo "$f_array[5]"; ?></td>
      <td><?php echo "$f_array[6]"; ?></td>
    </tr>
   <?php
  }
  }
  ?> 
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="599" height="76" border="1">
    <tr>
      <td width="48">ID</td>
      <td width="52">Name</td>
      <td width="145">Address</td>
      <td width="46">Place</td>
      <td width="63">Gender</td>
      <td width="88">Qualification</td>
      <td width="111">Username</td>
    </tr>
   <?php
   if(isset($_REQUEST['s1']))
   {
   view('checked');
   }
   elseif(isset($_REQUEST['s2']))
   {
   view('');
   }
   elseif(isset($_REQUEST['s3']))
   {
   $x=$_REQUEST['ch'];
   foreach($x as $item)
   {
   mysql_query("delete from tb1 where id=$item");
   }
   view('');
   }
   else
   {
   view('');
   }
   ?> 
<tr>
      <td colspan="7"><label>
        <div align="center">
          <input name="s1" type="submit" id="s1" value="Check All" />
          <input name="s2" type="submit" id="s2" value="Uncheck" />
          <input name="s3" type="submit" id="s3" value="Delete" />
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
