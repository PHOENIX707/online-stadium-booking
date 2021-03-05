<!DOCTYPE html>
<head>
<meta charset=utf-8 />
<title>Visitor Counter</title>
<style type="text/css">
body
{
background-color:#FFF6FF;
color:#D690D9;
margin:30px;
}
.visitor
{
color:blue;
}
</style>
</head>
<body>
<h1>Names of Flowers</h1>
<figure>
<img src="lilac.jpg" width="200px" alt="Lilac Flower"/>
<figcaption>The lilac Flower</figcaption>
</figure>
<hr/>
<?php
$handle=fopen("counter.txt","r");
if(!$handle)
{
echo "could not open file";
}
else
{
$counter=(int)fread($handle,20);
fclose($handle);
$counter++;
echo "<p class='visitor'>Number of page views:<em>".$counter."</em>";
$handle=fopen("counter.txt","w");
fwrite($handle,$counter);
fclose($handle);
}
?>
</body>
</html>

