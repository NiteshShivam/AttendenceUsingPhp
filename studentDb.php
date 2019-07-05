<?php
$x = $_POST['roll'];
$y = $_POST['email'];
$z = $_POST['password'];
$x1 = $_POST['date'];
$y1 = $_POST['attendance'];
if($x==""||$y==""||$z==""||$x1==""||$y1=="")
{
	echo "Fill all the detail";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query = "SELECT * FROM student WHERE roll = '$x' AND email ='$y' AND password='$z'";
	$result = mysql_query($query);
	$row =   mysql_num_rows($result);
	$value=mysql_fetch_array($result);
	if($row==0)
	{
		echo "Fill all the details correctly";
	}
	else
	{    
        $query0 = "SELECT * FROM status WHERE email='$y' AND date='$x1'";
		$result0 = mysql_query($query0);
		$row0 = mysql_num_rows($result0);
		if($row0!=0)
		{
			echo "You attendance is already recorded on the given data";
		}
		else
		{
		$query1 = "INSERT INTO status VALUES('$x','$value[1]','$y','$x1','$y1',0)";
		mysql_query($query1);
		echo "Your attendance is recorded<br><Br>";
		}
		$query2 = "SELECT * FROM status WHERE roll = '$x' AND EMAIL = '$y'";
		echo "<br><h2>Your Attendance records are given</h2>";
		echo "<table border='1' width='75%'>";
		echo "<tr height='5px'>";
		echo "<td width='20%'>Date</td>";
		echo "<td width='20%'>Status</td>";
		echo "<td width='20%'>Verification Status</td>";
		echo "</tr> ";
		echo "</table>";
		$result = mysql_query($query2);
		while($row=mysql_fetch_array($result))
		{
			echo "<table border='1' width='75%'>";
		    echo "<tr height='5px'>";
		    echo "<td width='20%'>".$row[3]."</td>";
		    echo "<td width='20%'>".$row[4]."</td>";
		    echo "<td width='20%'>".$row[5]."</td>";
		    echo "</tr>";
		    echo "</table>";
		}
		}
		echo "<Br><a href='student.php'>Record new Attendance</a>";
}

?>