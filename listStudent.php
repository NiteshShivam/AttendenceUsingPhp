<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['name'])||isset($_SESSION['email']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
   $query = "SELECT * FROM student";	
   $result = mysql_query($query);
   $row = mysql_num_rows($result);
   if($row==0)
   {
	   echo "There is not a Student Registered<br><Br>";
   }
   else
   { echo "<table border='1' width='75%'>";
    echo "<tr height='5px'>";
    echo "<td width='20%'>Roll No.</td>";
	echo "<td width='20%'>Name</td>";
    echo "<td width='20%'>Email</td>";
	echo "<td width='20%'>Phone nubmer</td>";
    echo "<td width='20%'>Class</td>";
	echo "</tr>";
	echo "</table>";
	 $query1 = "SELECT * FROM student";	
   $result1 = mysql_query($query1);
	while($row1=mysql_fetch_array($result1))
		{
			echo "<table border='1' width='75%'>";
			echo "<tr height='5px'>";
            echo "<td width='20%'>".$row1[0]."</td>";
	        echo "<td width='20%'>".$row1[1]."</td>";
            echo "<td width='20%'>".$row1[3]."</td>";
	        echo "<td width='20%'>".$row1[4]."</td>";
            echo "<td width='20%'>".$row1[5]."</td>";
	        echo "</tr>";
         	echo "</table>";
		}
}
   echo "<br><br><a href='modifyStudent.php'>Modify Student Data</a>";
   echo "<br><br><a href='logout.php'>logout.php</a>";
}
else
{
	header("location:index.php");
}
?>