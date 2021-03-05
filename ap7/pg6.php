<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
<title>PAL</title>
</head>
<body>
<h1>Aman is a legend.</h1>
<?php
$file=fopen("pal.txt","r") or die("error in opening file");
$count=(int)fread($file,10);
fclose($file);
$count++;
echo "<h1> No. of person visited the site : $count";
$file=fopen("pal.txt","w") or die("error in opening file");
fwrite($file,$count);
fclose($file);
?>
</body>
</html>
