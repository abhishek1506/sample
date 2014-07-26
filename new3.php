<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml 11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("course");
echo mysql_error($con);
$sql=mysql_query("insert into student(name,mobile,username,password,course) values('$_POST[n]','$_POST[m]','$_POST[e]','$_POST[p]','$_POST[c]')");
echo mysql_error($con);
if(!$sql)
	echo "error in inserting...!";
else
	echo 'Congrats .. !   Record added ';
mysql_close($con);
?>
<center>welcome</center>
<br/><br/>
<br/><br/>
<br/><br/>
<a href="front.xhtml">Login</a><br/>
</body>
</html>