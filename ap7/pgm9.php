<html>
<head>
<meta charset=utf-8/>
</head>
<body>
<?php
include("states.php");
$statesList=array();
preg_match('/\b(\w*xas)\b/',$states,$match);
$statesList[0]=$match[0];
preg_match('/\b(k\w*s)\b/i',$states,$match);
$statesList[1]=$match[0];
preg_match('/\b(M\w*s)\b/',$states,$match);
$statesList[2]=$match[0];
preg_match('/\b(\w*a)\b/',$states,$match);
$statesList[3]=$match[0];
echo $statesList[0]."<br>";
echo $statesList[1]."<br>";
echo $statesList[2]."<br>";
echo $statesList[3]."<br>";
?>
</body>
</html>
