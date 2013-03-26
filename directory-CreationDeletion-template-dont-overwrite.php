<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_REQUEST['s1']))
{

if(mkdir("haiii"))
echo "created";
else
echo "Not created";
}
if(isset($_REQUEST['s2']))
{
rmdir("hai");
}

?>
<form id="form1" name="form1" method="post" action="">
  <input name="s1" type="submit" id="s1" value="make" />
  <input name="s2" type="submit" id="s2" value="delete" />
</form>
</body>
</html>
