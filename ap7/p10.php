<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
<title>Student selection sort</title>
</head>
<body>
<?php
$a=[];
$server="localhost";
$user="root";
$pass="";
$db="student";
$con=mysqli_connect($server,$user,$pass,$db) or die("unnable to connect");
$query="select * from student";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{echo " table before sorting is:";
echo "<br>";
echo "<table border=1;><tr>";
echo "<th>usn</th><th>name</th><th>branch</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$row["usn"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["branch"]."</td></tr>";
array_push($a,$row["usn"]);
}
echo "</table>";
}
$n=count($a);
$b=[];
$c=[];
for($i=0;$i<$n-1;$i++)
for($j=$i+1;$j<$n;$j++)
{
if($a[$j]<$a[$i])
{
$temp=$a[$j];
$a[$j]=$a[$i];
$a[$i]=$temp;
}
}
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
for($i=0;$i<$n;$i++)
{
if($row["usn"]==$a[$i])
{
$b[$i]=$row["name"];
$c[$i]=$row["branch"];
}
}
}
}
echo " table after sorting is:";
echo "<br>";
echo "<table border=1;>";
echo "<tr><th>usn</th><th>name</th><th>branch</th></tr>";
for($i=0;$i<$n;$i++)
{
echo "<tr><td>".$a[$i]."</td>"."<td>".$b[$i]."</td>"."<td>".$c[$i]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>