<!DOCTYPE html >
<head >
<meta charset=utf-8 />
<title>Search </title>
</head>
<body>
<?php
include("states.php");
preg_match('/\b(\w*xas)\b/',$states,$match);
$result[0]=$match[0];
preg_match('/\b(k\w*s)\b/i',$states,$match);
$result[1]=$match[0];
preg_match('/\b(M\w*s)\b/',$states,$match);
$result[2]=$match[0];
preg_match('/\b(\w*a)\b/',$states,$match);
$result[3]=$match[0];
echo " ".$result[0];
echo " ".$result[1];
echo " ".$result[2];
echo " ".$result[3];
?>
</body>
</html>

