<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
<title>prog8</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="prog8.php" method="get">
<div>
<label for="num1">num1 </label>
<input type="text" name="num1">
</div>
<div>
<label for="num2">num2 </label>
<input type="text" name="num2">
</div>
<label>Operation:  Add </label>
<input type="radio" name="operator" value="+">
<label> Subtract </label>
<input type="radio" name="operator" value="-">
<label> Multiply </label>
<input type="radio" name="operator" value="*">
<label> Divide </label>
<input type="radio" name="operator" value="/">
<button type="submit" name="submit">Calculate</button>
</form>
<?php
if(isset($_GET["submit"]))
{
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$op=$_GET["operator"];
$result=0;
switch($op)
{
case "+" : $result=$num1+$num2;
           break;
case "-" : $result=$num1-$num2;
           break;
case "*" : $result=$num1*$num2;
           break;
case "/" : if($num2==0)
           {
	   echo "denominator cant be zero";
           $result="infite";
           }
           else
           $result=$num1/$num2;
           break;
default : echo "wrong operator";
	  break;

}
echo $num1.$op.$num2."=".$result;
}
?>
<br>
<hr>
<h1>Matrix Operations</h1>
<ul>
<li><a href="trans.php">Transpose of a matrix</a></li>
<li><a href="add.php">Addition of 2 metrices</a></li>
<li><a href="mult.php">Multiplication of 2 metrices</a></li>
</ul>
</body>
</html>

