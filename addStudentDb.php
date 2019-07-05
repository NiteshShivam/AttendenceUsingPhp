<?php

session_start();
if(isset($_SESSION['email'])||isset($_SESSION['name']))
{
$x = $_POST['roll1'];
$y= $_POST['name1'];
$z = $_POST['password1'];
$x1 = $_POST['class1'];
$y1 = $_POST['email1'];
$z1 = $_POST['phone2'];
if($x==""||$y==""||$z==""||$x1==""||y1=="")
{
	echo "fill all";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query = "SELECT * FROM student WHERE email='$y1' AND password='$z'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row>0)
	{
		echo "Student Already Exists";
		echo "<br><Br>Modify <a href='modifyStudent.php'>student detail</a>";
		echo "<br><Br><a href='logout.php'>Logout</a>";
	}
	else
	{
		$query1 = "INSERT INTO student VALUES('$x','$y','$z','$y1','$z1','$x1')";
		mysql_query($query1);
		echo "Student added";
		echo "<br><Br>Modify <a href='modifyStudent.php'>student detail</a>";
		echo "<br><Br><a href='logout.php'>Logout</a>";
	}

}
}
else
{
	header("location:index.php");
}
?>