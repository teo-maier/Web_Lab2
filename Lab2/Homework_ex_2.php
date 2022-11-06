<html>
<head>
    <title>Transmiterea variabilelor</title>
</head>
<body>
<form action="Homework_ex_2.php" method="get">
    Introduceti numarul intreg: <input type="text" name="n"/>
    Puterile mai mici decat k=: <input type="text" name="k"/>
    <input type="submit"/>
</body>
</html>
<?php
$n = $_GET["n"];
$k = $_GET["k"];
echo "Numarul introdus: " . $n . "<br/>";
echo "Doriti sa afisati puterile mai mici ale lui: " . $n . " mai mici decat " . $k . "<br>";
if ($n) {
    echo "Numerele sunt: " . getNumere($n, $k);
}
function getNumere($x, $y)
{
    $array = array();
    for ($i = 0; $i < 10; $i++) {
        if ($x ** $i < $y) {
            $array[] = $x ** $i;
        }
    }
    return implode(",", $array);
}

?>