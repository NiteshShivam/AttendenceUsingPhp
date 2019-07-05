<?php
session_start();
if(isset($_SESSION['name']))
{
$x = $_POST['roll2'];
$y = $_POST['email2'];
$z = $_POST['password2'];	
if($x==""||$y==""||$z=="")
{
	echo "Fill all the Details";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query = "SELECT * FROM student WHERE roll = '$x' AND email='$y' AND password = '$z'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row==0)
	{
		echo "There is no such Student ";
	}
	else
	{
		$query1="DELETE FROM student WHERE roll = '$x' AND email='$y' AND password = '$z'";
		mysql_query($query1);
		echo "Student Data is Deleted";
	}
	echo "<br><Br><a href='listStudent.php'>List of All the Student</a>";
	echo "<br><br><a href='modifyStudent.php'>Modify Student Data</a>";
	echo "<br><br><a href='logout.php'>Logout.php</a>";
}
}
else
{
	header("location:index.php");
}
?>