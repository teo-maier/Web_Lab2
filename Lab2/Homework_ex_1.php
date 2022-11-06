<html>
<head>
    <title>Transmiterea variabilelor</title>
</head>
<body>
<form action="Homework_ex_1.php" method="get">
    Introduceti numarul: <input type="text" name="nr"/>
    <input type="submit"/>
</body>
</html>
<?php
$nrIntrodus = $_GET["nr"];
echo "Numarul introdus: " . $nrIntrodus . "<br/>";
if ($nrIntrodus) {
    echo "Cifra de control: " . getCifraControl($nrIntrodus);
}
function getCifraControl($nr)
{
    $nr = array_sum(str_split($nr));
    return ($nr < 10) ? $nr : getCifraControl($nr);
}

?>