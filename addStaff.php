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
<form action="staffSignUp.php" method="post">
Add a Staff <br><br>
Name<br><br>
<input type="text" placeholder="Name" name="name" size="40">
<br>
Phone <br><br>
<input type="number_format" placeholder="Phone" name="phone" size="40"> 

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
<input type="submit" value="Submit" align="center">
</form>
<br><br>
<a href='delStaff.php'>Remove a staff</a>
<br><br>
<a href='modifyStaff.php'>Home </a>
<br><Br>
<a href='logout.php'>Logout</a>
</body>
</html>