<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml 11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("course");
mysql_query("insert into login(UserName,Pass) values('$_POST[n]','$_POST[p]')");
echo mysql_error($con);

$p=mysql_query("select password from student,login where student.name=login.UserName;");
echo mysql_error($con);
$r=mysql_fetch_array($p);
if('$_POST[n]'==$r["$p"])
	echo "welcome!";
else
	echo "Access Denied !";
mysql_close($con);
?>
<center>
<a href="front.xhtml">ReLogin</a><br/>
<form action="last.php" method="post">
<label>Enter your UserName:<input type="text" name="name" size="20"/>
</label>
<input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>