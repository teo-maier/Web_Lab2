<html>
<head><title>Testarea tipului variabilelor</title></head>
<body>
<?php
$test = 0; //declarare cu atribuire
echo gettype($test);
echo "<br>"; //integer
$test = 8; //declarare cu atribuire
echo gettype($test); //integer
echo "<br>";
$test = 9.8; //declarare cu atribuire
echo gettype($test); //double
echo "<br>";
$test = "curs"; //declarare cu atribuire
echo gettype($test); //string
echo "<br>";
$test = true; //declarare cu atribuire
echo gettype($test); //boolean
echo "<br>"; ?>
</body></html>