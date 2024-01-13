<?php
$conn=mysql_connect('localhost','root','') or die("could not connected".mysql_error($conn));
mysql_select_db('cs55',$conn) or die ("Database not connected");
$rollno=$_GET['rollno'];
$sql="delete from stdmark where rollno=$rollno";
if(mysql_query($sql))
{
	echo "Record Deleted";
}
else
{
	echo "Record not found";
}
mysql_close($conn);
echo "</br>";
echo "<a href='stdmarklist.html'>Home</a>";
?>
