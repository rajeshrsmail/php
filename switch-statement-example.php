
<!--PHP Code for mysql Access-->

<?php
mysql_connect("localhost","capitalusr","capital");
mysql_select_db("capitaldb")or die(mysql_error());
?>

 

 <html>
 <head>
 <title>  testing </title>
 
 <style>
 
 
 </style>
 </head>
 <form name="form1" method="post" action="">
   <table width="443" border="0">
     <tr>
       <th width="181" scope="row"><div align="left">Capital of Karnataka:</div></th>
       <td width="252"><input type="radio" name="KC" id="radio" value="Bangalore">
         Bangalore 
            </td>
         <td width="252"><input type="radio" name="KC" id="radio6" value="Chennai">         
           Chennai 
          </td>
         <td width="252"><input type="radio" name="KC" id="radio" value="Trivandrum">
         Trivandrum 
          </td>
     </tr>
     <tr>
       <th scope="row"><div align="left">Capital of Tamilnadu:</div></th>
       <td><input type="radio" name="TC" id="radio3" value="Bangalore">
         Bangalore</td>
         <td width="252"><input type="radio" name="TC" id="radio" value="Chennai">
         Chennai 
          </td>
         <td width="252"><input type="radio" name="TC" id="radio" value="Trivandrum">
         Trivandrum 
          </td>
     </tr>
     <tr>
       <th scope="row"><div align="left">Capital of Kerala:</div></th>
       <td><input type="radio" name="KERC" id="radio4" value="Bangalore">
Bangalore</td>
       <td><input type="radio" name="KERC" id="radio2" value="Chennai">
Chennai </td>
       <td><input type="radio" name="KERC" id="radio5" value="Trivandrum"> 
       Trivandrum</td>
     </tr>
     <tr>
       <th colspan="4" scope="row"> <div align="center">
         <input type="submit" name="submit" id="submit" value="Submit">
       </div></th>
     </tr>
   </table>
   
   
<!-- THE PHP CODE -->
         <?php
         if (isset($_REQUEST['submit']))
		 {
			 $name=Rajesh;
			 $a=$_REQUEST['KC'];
			 $b=$_REQUEST['TC'];
			 $c=$_REQUEST['KERC'];
			 
	     mysql_query("insert into tb1 values('$name','$a','$b','$c')");
		 if (mysql_affected_rows() >=1)
		 echo ("Inserted");
		 else
		 echo ("Not inserted");
		 }
		 $total=0;
		 if ($a="Bangalore")
		 {
		 echo "<br>The capital of Karnataka is $a, your answer is correct!";
		 $total++;
		 else
		 echo "<br>The capital of Karnataka is $a, your answer is wrong!";
		 
		  if ($b="Chennai")
		 {
		 echo "<br>The capital of TamilNadu is $b, your answer is correct!";
		 $total++;
		 else
		 echo "<br>The capital of TamilNadu is $b, your answer is wrong!";
		 
		 
		  if ($a="Bangalore")
		 {
		 echo "<br> The capital of Kerala is $c, your answer is correct!";
		 $total++;
		 else
		 echo "<br>The capital of Kerala is $c, your answer is wrong!";
		 }
		 
		 
		 echo "<br>Your Total Marks here:  $total");
		 
		 ?>
   
   
 <!--END OF THE PHP CODE-->
 </form>
 
 
 
 
 
 
 </html>