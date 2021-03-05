<?php
$alpha = range('A', 'Z');
$k = 0;
for($i=0; $i<=4; $i++)
{
 for($j=0,$b=4; $j<=$i; $j++,$b--)
  echo str_repeat(" ",$b).$alpha[$j];
 for($k=$i-1; $k>=0; $k--)
  echo $alpha[$k];
  echo "<br>";	
}
?>
