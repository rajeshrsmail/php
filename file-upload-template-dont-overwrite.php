<?php
mysql_connect("localhost","upload","upload") or die(mysql_error());
mysql_select_db("upload");
?>

 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #97E8B7;
}
-->
</style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="269" border="0">
    <tr>
      <td width="171"><span class="style1">Upload Image From Your System </span></td>
      <td width="82"><input name="t1" type="file" id="t1"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="s1" type="submit" id="s1" value="Upload">
      </div></td>
    </tr>
  </table>
</form>

<?php
if (isset($_REQUEST['s1']))
{
$a=$_FILES['t1']['name'];
$b=$_FILES['t1']['tmp_name'];
$x=mysql_query("select max(id) from tb1");
$y=mysql_result($x,0);
$y++;
$ext=strrchr($a,'.');
$name="$y$ext";
mysql_query("insert into tb1 values('$y','$name')");
move_uploaded_file($b,"uploads/$name");
if (mysql_affected_rows() >=1)
echo "the photo named $a is inserted to DB";
else
echo "Sorry, the photo named $a is not inserted to DB";
}
?>
</body>
</html>
