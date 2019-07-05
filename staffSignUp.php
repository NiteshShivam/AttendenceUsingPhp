<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['name']))
{
$x = $_POST['name'];
$y = $_POST['phone'];
$z = $_POST['email2'];
$x1 = $_POST['password2'];
if($x==""||$y==""||$z==""||$x1=="")
{
	echo "Fill All";
}
else
{
    mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query="SELECT * FROM staff WHERE email='$z' AND password='$x1'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row>0)
	{
		echo "Staff Already Exists";
		echo "<br><br><a href='modifyStaff.php'>Home</a>";
		echo "<br><br><a href='logout.php'>Logout</a>";
	}
	else
	{
		$query1 = "INSERT INTO staff VALUES('$x','$y','$z','$x1')";
		mysql_query($query1);
		echo "Staff Added";
		echo "<br><br><a href='modifyStaff.php'>Home</a>";
		echo "<br><br><a href='logout.php'>Logout</a>";
	}
}
}
else
{
	header("location:login.php");
}
?>