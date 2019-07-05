<!DOCTYPE html>
<html>
<body>
<?php
session_start();
if(isset($_SESSION['name']))
{
   echo "Hi Admin You have  Authroity to delete a detail  of Staff and also can add a new Staff";	
   echo "<br><br><hr>";
}
else
{
	header("location:login.php");
}
?>
<br>Remove a staff
<form action="delStaffDb.php" method="post">
Name<br><br>
<input type="text" placeholder="Name" name="name" size="40">
<br>
<Br><br>
Email <br><br>
<input type="email" placeholder="Email" name="email2" size="40">
<br>
<br>
Password
<br><br>
<input type="Password" placeholder="Password" name="password2" size="40">
<br><br>

<br>
<br>
<input type="submit" value="Delete" align="center">
</form>
<br><br>
<a href='addStaff.php'>Add a staff</a>
<br><Br>
<a href='modifyStaff.php'>Home </a>
<br><br>
<a href='logout.php'>Logout</a>
</body>
</html>