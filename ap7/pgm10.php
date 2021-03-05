<html>
<head>
<meta charset=utf-8/>
</head>
<body>
<?php
$server="localhost";
$user="root";
$pass="";
$db="student";
$conn=mysqli_connect($server,$user,$pass,$db) or die("couldn't connect");
$query="select * from student";
$result=mysqli_query($conn,$query);
$a=array();
if(mysqli_num_rows($result)>0)
{
echo "Before sorting :"."<br>";
echo "<table border=1;><tr>";
echo "<th>usn</th><th>name</th><th>branch</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$row['usn']."</td><td>".$row['name']."</td><td>".$row['branch']."</td></tr>";
array_push($a,$row['usn']);
}
echo "</table>";
}
$n=count($a);
$b=array();
$c=array();
for($i=0;$i<$n-1;$i++)
{
for($j=$i+1;$j<$n;$j++)
{
if($a[$i]>$a[$j])
{
$temp=$a[$i];
$a[$i]=$a[$j];
$a[$j]=$temp;
}
}
}
$query="Select * from student";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
for($i=0;$i<$n;$i++)
{
if($row['usn']==$a[$i])
{
$b[$i]=$row['name'];
$c[$i]=$row['branch'];
}
}
}
}
echo "After sorting :"."<br>";
echo "<table border=1;><tr>";
echo "<th>usn</th><th>name</th><th>branch</th></tr>";
for($i=0;$i<$n;$i++)
{
echo "<tr><td>".$a[$i]."</td><td>".$b[$i]."</td><td>".$c[$i]."</td></tr>";
}
echo "</table>";
?>