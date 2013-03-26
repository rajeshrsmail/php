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
//open a new file named note.txt in write mode.
$fp=fopen("note.txt","w");
//$str="hai welcome";
//$str holds the text what you have entered in the textarea.
$str=$_REQUEST['t1'];
//fwrite function will write the contents of $str into the opened file note.txt, that is append.
fwrite($fp,$str);
//Just display in the html file that the contents are being written to the file named note.txt.
echo "Writing..";

}
// The following code functions in such a way that the user will enter the name of the file to be opened in the second text box and then press the Read box.
//if the user has pressed the Read button...
if(isset($_REQUEST['s2']))
{
//$f="note.txt";\
//Read the file name mentioned in the text box and assign it to $f.
$f=$_REQUEST['t2'];
if(isset($f))
{
//open the file in read mode and assign the value to $fp.
$fp=fopen($f,"r");
//specify the length, it is customary to do so, the filesize function will have the value of $f.
$len=filesize($f);
//read the contents of the file and assign it to $ff.
$ff=fread($fp,$len);
//Echo to the display.!!
echo $ff;
}

}

if(isset($_REQUEST['s3']))
{

$fp=fopen("note.txt","a");
//$str="hai welcome";
//$str holds the text what you have entered in the textarea.
$str=$_REQUEST['t1'];
//fwrite function will write the contents of $str into the opened file note.txt, that is append.
fwrite($fp,$str);
//Just display in the html file that the contents are being written to the file named note.txt.
echo "Writing..";

}
?>
<form id="form1" name="form1" method="post" action="">
  <p>
    <textarea name="t1" id="t1"></textarea>
    <input name="t2" type="text" id="t2" />
  </p>
  <p>
    <input name="s1" type="submit" id="s1" value="Write" />
    <input name="s2" type="submit" id="s2" value="Read" />
    <input name="s3" type="submit" id="s3" value="Append" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
