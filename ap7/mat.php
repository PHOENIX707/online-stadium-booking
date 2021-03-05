<html>
<head>
<meta charset=utf-8/>
</head>
<body>
<a href="p8.php">Back to main menu</a>
<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(7,8,9),array(4,5,6),array(1,2,3));
$m=count($a);
$n=count($a[0]);
$p=count($b);
$q=count($b[0]);
echo "<hr>";
echo "First matrix:"."<br>";
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$n;$j++)
{
echo " ".$a[$i][$j];
}
echo "<br>";
}
echo "<br>";
echo "Second matrix:  "."<br>";
for($i=0;$i<$p;$i++)
{
for($j=0;$j<$q;$j++)
{
echo " ".$b[$i][$j];
}
echo "<br>";
}
echo "<hr>";
echo "Transpose of First matrix:  "."<br>";
for($i=0;$i<$n;$i++)
{
for($j=0;$j<$m;$j++)
{
echo " ".$a[$j][$i];
}
echo "<br>";
}
echo "<br>";
echo "Transpose of Second matrix:  "."<br>";
for($i=0;$i<$q;$i++)
{
for($j=0;$j<$p;$j++)
{
echo " ".$a[$j][$i];
}
echo "<br>";
}
echo "<hr>";
echo "Addition of two metrices: "."<br>";
echo "<br>";
if($m==$p and $n==$q)
{
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$n;$j++)
{
echo " ".($a[$i][$j]+$b[$i][$j]);
}
echo "<br>";
}
}
echo "<hr>";
echo "Multiplication of two metrices:"."<br>";
echo "<br>";
if($n==$p)
{$result=array();
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$q;$j++)
{
$result[$i][$j]=0;
for($k=0;$k<$n;$k++)
{
$result[$i][$j]+=($a[$i][$k]*$b[$k][$j]);
}
}
}
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$q;$j++)
{
echo " ".$result[$i][$j];
}
echo "<br>";
}
}
?>
