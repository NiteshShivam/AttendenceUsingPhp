<?php
$x = $_POST['name'];
$y = $_POST['password'];
if($x==""||$y=="")
{
	header("location:login.php");
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query ="SELECT * FROM admin WHERE name='$x' AND password='$y'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row!=0)
	{
		session_start();
		$_SESSION['name']=$x;
			echo "<h1>List Of  Staff </h1>";
			echo "<table border='1' width='75%'>";
		    echo "<tr height='5px'>";
	        echo "<td width='20%'>Name</td>";
		    echo "<td width='20%'>Phone Number</td>";
	        echo "<td width='20%'>Email</td>";
		    echo "</tr>";
			echo "</table>";
			$query1 = "SELECT * FROM staff";
			$result1 = mysql_query($query1);
			while($row1 = mysql_fetch_array($result1))
			{
		        echo "<table border='1' width='75%'>";
		        echo "<tr height='5px'>";
	            echo "<td width='20%'>".$row1[0]."</td>";
		        echo "<td width='20%'>".$row1[1]."</td>";
	            echo "<td width='20%'>".$row1[2]."</td>";
		        echo "</tr>";
			    echo "</table>";
			}
			echo "<a href='addStaff.php'>Add a new staff</a>";
			echo "<br><br>";
			echo "<a href ='delStaff.php'>Remove a Staff</a>";
			echo "<br><Br><a href='listStudent.php'>List of All the Student</a>";
			echo "<br><br><a href='modifyStudent.php'>Modify Student Data</a>";
			echo "<br><br><a href='logout.php'>Logout.php</a>";
	}
	else
	{
		header("location:index.php");
	}
}
?>