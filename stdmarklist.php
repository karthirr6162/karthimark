<?php
$conn=mysql_connect("localhost","root","") or die("could not connected".mysql_error($conn));
mysql_select_db("cs55",$conn) or die ("Database not connected");
$stdname=$_GET['stdname'];
$rollno=$_GET['rollno'];
$class=$_GET['class'];
$mark1=$_GET['mark1'];
$mark2=$_GET['mark2'];
$mark3=$_GET['mark3'];
$mark4=$_GET['mark4'];
$mark5=$_GET['mark5'];
$total=$mark1+$mark2+$mark3+$mark4+$mark5;
$average=$total/5;
echo "Stdname:$stdname";
echo "</br>";
echo "Rollno:$rollno";
echo "</br>";
echo "Class:$class";
echo "</br>";
echo "Mark1:$mark1";
echo "</br>";
echo "Mark2:$mark2";
echo "</br>";
echo "Mark3:$mark3";
echo "</br>";
echo "Mark4:$mark4";
echo "</br>";
echo "Mark5:$mark5";
echo "</br>";
echo "Total:$total";
echo "</br>";
echo "Average:$average";
echo "</br>";
if($average>=90)
{$out="Grade A+";}
else if($average>=80)
{$out="Grade A";}
else if($average>=70)
{$out="Grade B";}
else if($average>=60)
{$out="Grade C";}
else if($average>=50)
{$out="Grade D";}
else 
{$out="Grade E";}
echo "Grade:$out";
echo "</br>";
$sql="INSERT INTO stdmark(stdname,rollno,class,mark1,mark2,mark3,mark4,mark5,total,average,grade)
VALUES('$stdname','$rollno','$class','$mark1','$mark2','$mark3','$mark4','$mark5','$total','$average','$out')";
if(mysql_query($sql))
{
echo "New Record Created";
}
else
{
echo "Error".mysql_error($conn);
}
mysql_close($conn);
echo "</br>";
echo "<a href='stdmarklist.html'>Home</a>";
?>