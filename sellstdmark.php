<?php
$conn=mysql_connect("localhost","root","") or die("could not connected".mysql_error($conn));
mysql_select_db("cs55",$conn) or die ("Database not connected");
$q="select*from stdmark";
$sq=mysql_query($q,$conn);
echo "<table border='2'>";
echo "<th>Stdname</th><th>Rollno</th><th>Class</th><th>Mark1</th><th>Mark2</th><th>Mark3</th>
<th>Mark4</th><th>Mark5</th><th>Total</th><th>Average</th><th>Grade</th>";
while($row=mysql_fetch_array($sq))
{
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "<td>$row[6]</td>";
	echo "<td>$row[7]</td>";
	echo "<td>$row[8]</td>";
	echo "<td>$row[9]</td>";
	echo "<td>$row[10]</td>";
	echo "</tr>";
}
mysql_close($conn);
echo "</br>";
echo "<a href='stdmarklist.html'>Home</a>";
?>
