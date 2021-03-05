<html>
<head>
<meta charset=utf-8/>
</head>
<body>
<form action="p8.php" method="get">
<div>
<label for="num1">num1</label>
<input type="text" id="num1" name="num1">
<br>
</div>
<div>
<label for="num2">num2</label>
<input type="text" id="num2" name="num2">
<br>
</div>
<label>Choose operator:  </label>
<input type="radio" name="operator" value="+">
<label>Addition  </label>
<input type="radio" name="operator" value="-">
<label>Subtract  </label>
<input type="radio" name="operator" value="*">
<label>Multiply  </label>
<input type="radio" name="operator" value="/">
<label>Division  </label>
<button type="submit" name="submit">Submit</button>
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
case "/" : $result=$num1/$num2;
           break;
default : echo "wrong operator";
          break;				 
}
echo "result:  ".$result;
}
?>
<br>
<hr>
<a href="mat.php">Click to see matrix operations</a>
</body>
</html>


