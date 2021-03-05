<html>
<head>
<meta charset=utf-8/>
</head>
<body>
<h1>welcome to my site!</h1>
<?php
$file=fopen("aman.txt","r");
$count=fread($file,10);
fclose($file);
$count++;
$file=fopen("aman.txt","w");
fwrite($file,$count);
fclose($file);
echo "visitors: ".$count;
?>
</body>
</html>
