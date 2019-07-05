<!DOCTYPE html>
<html>
<body>
<?php
session_start();
if(isset($_SESSION['email']) || isset($_SESSION['name']))
{
	echo "You are logged in  ";
	
}
else
{
	header("Location:index.php");
}

?> 

<table border ="1">
<thead>
<th>
Add a New Student
</th>
<th>
Delete a Student
</th>
<th>
Verify the Student Attendance
</th>
</thead>
<tbody>
<tr>
<td>
<form method="post" action ="addStudentDb.php">
<h1>Fill the Student Detail</h1>
Roll No.<Br><br>
<input type="number_format" placeholder="Roll Number" size="40" name="roll1">
<br><br>
Name : <br><br>
<input type="text" placeholder="Name" size="40" name="name1">
<br><br>
Phone :
<br><br>
<input type="number" placeholder="Phone Number" name="phone2">
<br><br>
Password : <br><Br>
<input type="password" placeholder="Password" size="40" name="password1">
<br><br>
Class: <br><Br>
<input type="text" placeholder="Class" size="40" name="class1">
<br><Br>
Email : <br><br>
<input type="email" placeholder="email" size="40" name="email1">
<br><br>
<input type="submit" value="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="reset">
</form>
</td>
<td>
<form method="post" action="delStudentDb.php">
<h1>Give the Student Data To be Deleted</h1>
<br><br>
Roll No. <br><br>
<input type="number_format" placeholder="Roll Number" name="roll2">
<br><br>
Email :
<br><br>
<input type="email" placeholder="Email Id" name="email2">
<br><br>
Password :
<br><br>
<input type="password" placeholder="Password" name="password2">
<br><br>
<input type="submit" value="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="reset">
 </form>
</td>
<td>
<form action="verifyAttendance.php" method="post">
Date : <br><br>
<input type="date" name="date1">
<br><Br>
<input type="submit" value="submit">
</form>
</td>
</tr>
</tbody>
</table>
<br>
<br>
<a href='listStudent.php'>List of All The Student</a>
<br><Br>
<a href="logout.php">logout.php</php>
</body>
</html>