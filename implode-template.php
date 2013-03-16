<?php
mysql_connect("localhost","copper3","copper3") or die(mysql_error());
mysql_select_db("copper3");
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
      <td width="105">Name</td>
      <td width="85"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><p>
        <input name="q[]" type="checkbox" id="q[]" value="sslc">
      SSLC</p>
        <p>
          <input name="q[]" type="checkbox" id="q[]" value="predegree">
        Predegree</p>
        <p>
          <input name="q[]" type="checkbox" id="q[]" value="degree">
        Degree</p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Submit">
      </div></td>
    </tr>
  </table>
  
  <?php
  if(isset($_REQUEST['submit']))
  {
	  $a=$_REQUEST['name'];
	  echo $a;
	  $b=$_REQUEST['qualification'];
	  echo $b;
	  $e=implode(",",$_REQUEST['q']);
	  echo $e;
  }
	  mysql_query("insert into tb1 values(NULL,'$a','$e')");
	  if(mysql_affected_rows()>=1)
	  {
		  echo "inserted";
	  }
	  else
	  {
	  echo "not inserted";
	  }
	  
	  ?>
	  
</form>
</body>
</html>