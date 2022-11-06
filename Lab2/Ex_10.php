<html>
<head>
    <title>Schimbarea tipului variabilelor</title>
</head>
<body>
<?php
$test = 9.8; //declarare cu atribuire
echo gettype($test); //double
echo " ";
echo "este $test <br>"; //afiseaza:9.8
settype($test, 'string');
echo gettype($test); //string
echo " ";
echo "este $test <br>"; //afiseaza:9.8
settype($test, 'integer');
echo gettype($test); //integer
echo " ";
echo "este $test <br>"; //afiseaza:9
settype($test, 'double');
echo gettype($test); //double
echo " ";
echo "este $test <br>"; //afiseaza:9
settype($test, 'boolean');
echo gettype($test); //boolean
echo " ";
echo "este $test <br>"; //1
?>
</body>
</html>