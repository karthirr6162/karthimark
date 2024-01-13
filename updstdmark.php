<?php
$conn=mysql_connect("localhost","root","") or die("could not connected".mysql_error($conn));
mysql_select_db("cs55",$conn) or die ("Database not connected");
$rollno=$_GET['rollno'];
$stdname=$_GET['stdname'];
$sql="update stdmark set stdname='$stdname' where rollno=$rollno";
$upd=mysql_query($sql,$conn);
if($upd)
{
	echo "Record Updated";
}
else 
{
	echo "Error" .mysql_error($conn);
}
mysql_close($conn);
echo "</br>";
echo "<a href='stdmarklist.html'>Home</a>";
?>
