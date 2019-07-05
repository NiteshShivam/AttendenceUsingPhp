<?php
$x = $_POST['date1'];
$y = $_GET['date1'];
if($y!="")
{
	$x = $y;
}
session_start();
if(isset($_SESSION['email'])||isset($_SESSION['name']))
{   
	if($x=="")
	{
		echo "fill the date ";
	}
	else
	{
	mysql_connect("localhost","root","");
	mysql_select_db("attendance");
	$query = "SELECT * FROM status WHERE date = '$x'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row ==0)
	{
		echo "Nothing is recorded on ".$x;
	}
	else
	{   
		    echo "<h1>Students Present on Date ".$x." are given below</h1>";
			echo "<table border='1' width='75%'>";
		    echo "<tr height='5px'>";
			echo "<td width='20%'>Roll No.</td>";
	        echo "<td width='20%'>Name</td>";
	        echo "<td width='20%'>Email</td>";
	        echo "<td width='20%'>Current Value</td>";
	        echo "<td width='20%'>CONFIRMATIONN</td>";
		    echo "</tr>";
			echo "</table>";
		 while($row= mysql_fetch_array($result))
		{
			echo "<table border='1' width='75%'>";
		echo "<tr height='5px'>";
		echo "<td width='20%'>".$row[0]."</td>";
		echo "<td width='20%'>".$row[1]."</td>";
		echo "<td width='20%'>".$row[2]."</td>";
		echo "<td width='20%'>".$row[4]."</td>";
		echo "<td width='20%'>".$row[5]."<a href='update.php?nemail=$row[2]&value=$row[5]&date0=$x'>Update</a></td>";
		echo "</tr>";
		echo "</table>";
		}
		
	}
	echo "<br><br><a href='modifyStudent.php'>Modify Student data</a>";
		echo "<br><br><a href='logout.php'>logout</a>";
	}
}
else
{
	header("location:index.php");
}
?>