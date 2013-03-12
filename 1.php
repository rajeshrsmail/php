<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

label {
    display:block;
    margin-top:50px;
    letter-spacing:1px;
}

/* This section centers our complete page */
.main {
    display:block;
    margin:0 auto;
    width:500px;
}

/* This section centers the form inside our web page*/
form {
 /*   margin:0 auto; */
      width:400px; 
}

/* Applying styles to our text boxes */
input, textarea {
	width:400px;
	height:27px;
	background:#666666;
	border:2px solid #f6f6f6;
	padding:10px;
	margin-top:10px;
	font-size:0.7em;
	color:#ffffff;
}

textarea {
	height:200px;
	font-family:Arial;
}

#submit {
    width:85px;
    height:35px;
    background:url(file:///C|/Users/rajesh/Desktop/submit.png);
    text-indent:-9999px;
    border:none;
    margin-top:20px;
    cursor:pointer;
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
       <label>Your Name:</label>
       <input name="name" placeholder="Goes Here">
       <label>Your Email:</label>
       <input name="email" type="email" placeholder="Goes Here">
       <label>Your Message:</label>
       <textarea name="message" placeholder="Goes Here"></textarea>
       <input id="submit" name="submit" type="submit" value="Submit">
</form>
</body>
</html>