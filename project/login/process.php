<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


mysqli_connect("localhost","root"."");
mysql_select_db("login");

$result = mysql_query("select * from user where username = '$username'and where password = '$password'");

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password )
{
	echo "login sucess@@@@ welcome" .$row['username'];
	
}
else
{
	echo "failed to login";
}
?>


