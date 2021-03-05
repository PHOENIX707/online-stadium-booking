<html>
<head>
<meta charset=utf-8/>
</head>
<body>
<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(7,8,9),array(4,5,6),array(1,2,3));
$m=count($a);
$n=count($a[0]);
$p=count($b);
$q=count($b[0]);
echo "<table border=1>";
for($i=0;$i<$n;$i++)
{echo "<tr>";
for($j=0;$j<$m;$j++)
{
echo "<td>".$a[$i][$j]."</td>";
}
echo "</tr>";
}
echo"</table>";
echo "<hr/>";
echo "<table border=1>";
for($i=0;$i<$n;$i++)
{echo "<tr>";
for($j=0;$j<$m;$j++)
{
echo "<td>".$a[$j][$i]."</td>";
}
echo "</tr>";
}
echo"</table>";
echo "<hr>";

if($m==$p and $n==$q)
{echo "<table border=1>";
for($i=0;$i<$m;$i++)
{echo "<tr>";
for($j=0;$j<$n;$j++)
{
echo "<td>".($a[$i][$j]+$b[$i][$j])."</td>";
}
echo "</tr>";
}
echo "</table>";
}
if($n===$p)
{
$result=array();
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$q;$j++)
{$result[$i][$j]=0;
for($k=0;$k<$n;$k++)
$result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
}
}
}
echo "<hr/>";
echo "<table border=1>";
for($i=0;$i<$m;$i++)
{echo "<tr>";
for($j=0;$j<$q;$j++)
{
echo "<td>".$result[$i][$j]."</td>";
}
echo "</tr>";
}
echo"</table>";
?>
</body>
</html>