<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['name']))
{
	$x = $_POST['name'];
	$y = $_POST['email2'];
	$z = $_POST['password2'];
	if($x==""||$y==""||$z=="")
	{
		header("location:delStaff.php");
	}
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("attendance");
		$query = "SELECT * FROM staff WHERE name='$x' AND email='$y' AND password='$z'";
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
		if($row==0)
		{
			echo "No match Found<br><Br>";
			echo "<a href='delStaff.php'>Remove a staff</a>";
			echo "<br><br><a href='logout.php'>logout</a>";
		}
		else
		{
			$query1 ="DELETE FROM staff WHERE name='$x' AND email='$y' AND password='$z'";
			mysql_query($query1);
			echo "Staff is Removed<br><Br>";
			echo "<a href='addStaff.php'>Add a Staff</a><br><br>";
			echo "<a href='delStaff.php'>Remove a staff</a><br>";
			echo "<br><br><a href='logout.php'>logout</a>";
		}
	}
}
else
{
	header("location:index.php");
}
?>