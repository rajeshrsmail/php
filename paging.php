<?php
mysql_connect("localhost","copper","copper") or die(mysql_error());
mysql_select_db("copper");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <table width="561" height="51" border="1">
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
$i=1;
$offset=0;
$limit=5;
if($_REQUEST['ix'])
{
$offset=($_REQUEST['ix']-1)*$limit;
}
  $query=mysql_query("select * from tb1 limit $offset,$limit");
  while ($f_array=mysql_fetch_row($query))
  {

?>
    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo "$f_array[1]"; ?></td>
      <td><?php echo "$f_array[2]"; ?></td>
      <td><?php echo "$f_array[3]"; ?></td>
      <td><?php echo "$f_array[4]"; ?></td>
      <td><?php echo "$f_array[5]"; ?></td>
      <td><?php echo "$f_array[6]"; ?></td>
    </tr>
   <?php
   $i++;
  }
  ?>
  </table>

<?php
$x=mysql_query("select count(*) from tb1");
$y=mysql_result($x,0);
$z=ceil($y/$limit);
for($m=1;$m<=$z;$m++)
{
echo "<a href=paging.php?ix=$m>$m</a>&nbsp;&nbsp;";
}
?>
</form>
</body>
</html>
