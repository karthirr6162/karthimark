<?php
$conn=mysql_connect("localhost","root","") or die("could not connected".mysql_error($conn));
mysql_select_db("cs55",$conn) or die ("Database not connected");
$rollno=$_GET['rollno'];
$q="select*from stdmark where rollno=$rollno";
$sq=mysql_query($q,$conn);
while($row=mysql_fetch_array($sq))
{
	echo "</br>";
	echo "Stdname:$row[0]";
	echo "</br>";
	echo "Rollno:$row[1]";
	echo "</br>";
	echo "Class:$row[2]";
	echo "</br>";
	echo "Mark1:$row[3]";
	echo "</br>";
	echo "Mark2:$row[4]";
	echo "</br>";
	echo "Mark3:$row[5]";
	echo "</br>";
	echo "Mark4:$row[6]";
	echo "</br>";
	echo "Mark5:$row[7]";
	echo "</br>";
	echo "Total:$row[8]";
	echo "</br>";
	echo "Average:$row[9]";
	echo "</br>";
	echo "Grade:$row[10]";
	break;
}
mysql_close($conn);
echo "</br>";
echo "<a href='stdmarklist.html'>Home</a>";
?>