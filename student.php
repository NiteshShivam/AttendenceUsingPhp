<!DOCTYPE HTML>
<html>
<head>
<title>Student Form</title>
</head>
<body>
<h2>click here for <a href="index.php" > staff </a>Login</h2>
<hr>
<h1>
<marquee>Student can give there Attendance</marquee>
</h1>
<hr>
<table align="center" border="10" width="20%">
<thead>
<th width="75%">
Detail Please<br/><br/>
</th>
</thead>
<tbody>
<tr>
<td>
<form method="post" action="studentDb.php">
Roll No.<br><br>
<input type="phone" placeholder="Roll Number" size="40" name="roll">
<br><br>
Email : <br><br>
<input type="email" placeholder="email" size="40" name="email">
<br><br>
Password :<br><br>
<input type="password" size="40" placeholder="password" name="password"><br><br>
Present : <input type="radio" name="attendance" value="present">
<br><br>
Absent : <input type="radio" name="attendance" value="absent">
<br><br>
Date :<br><br> <input type="date" name="date" placeholder="Current Date" size="40">
<br><br>
<input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="reset">
</form>
</td>
</tr>
</tbody>
</table>
</body>
</html>