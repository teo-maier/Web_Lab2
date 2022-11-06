<html>
<head><title>Variabila-variabilei</title></head>
<body>
<?php
$nume = 'Ion';
$$nume = 'Maria';
echo $Ion . "<br>";//afiseaza variabila_variabilei_nume
echo $nume . "<br>";
echo $$nume . "<br>";
$nume = '123';
$$nume = '456'; //din nou se atribuie o valoare
echo $nume . "<br>";
echo ${'123'} . "<br>";//folosind acolade se afiseaza valoare 456 ?>
</body>
</html>