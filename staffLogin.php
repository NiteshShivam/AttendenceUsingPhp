<!DOCTYPE html>
<html>
<body>
<?php
$x = $_POST['email1'];
$y = $_POST['password1'];
if($x=="" || $y=="")
{
	echo "fill all";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query = "SELECT * FROM staff WHERE email='$x' AND password='$y'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row>0)
	{   session_start();
		$_SESSION['email']=$x;
		$_SESSION['pswd']=$y;
		header("location:modifyStudent.php");
		
	}
	else
	{
		echo "Please Enter correct Details";
	}
	
}
?>
</body>
</html>