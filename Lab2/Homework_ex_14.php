<html>
<head>
    <title>Transmiterea variabilelor</title>
</head>
<body>
<form action="Homework_ex_14.php" method="get">
    Introduceti numarul natural: <input type="text" name="nr"/>
    <input type="submit"/>
</body>
</html>
<?php
$nrIntrodus = $_GET["nr"];
echo "Numarul introdus: " . $nrIntrodus . "<br/>";
if ($nrIntrodus) {
    echo "Cel mai mare nr p avand proprietatea 2^p <= n: " . getP($nrIntrodus);
}
function getP($nr)
{
    for ($i = 0; $i < $nr; $i++) {
        if (2 ** $i > $nr) {
            return $i - 1;
        }
    }
}

?>