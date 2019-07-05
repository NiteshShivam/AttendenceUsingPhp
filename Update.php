<!DOCTYPE html>
<html>
<body>
<?php
session_start();
if(isset($_SESSION['email'])||isset($_SESSION['name']))
{
	$v1 = $_GET['nemail'];
	$v2 = $_GET['value'];
	$v3 = $_GET['date0'];
	$val1 = $_POST['taken'];
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	mysql_query("UPDATE status SET cValue='$val1' WHERE email='$v1' AND date='$v3'");
	mysql_query("UPDATE status SET AfterVerification='1' WHERE email='$v1' AND date='$v3'");
	echo "<br><br>";
	echo "<a href='modifyStudent.php'>Modify Student Data</a>";
	echo "<br><br><a href='logout.php'>Logout</a>";
	if($_POST['taken']!="")
	{
		header("location:verifyAttendance.php?date1=$v3");
	}
}
else
{
	header("location:index.php");
}
?>
<form action="" method="post">
Present : <input type="radio" name="taken" value="present">
<br><br>
Absent : <input type="radio" name="taken" value="absent">
<br><Br>
<input type="submit" value="submit">
 </form>
</body>
</html>