<html>
<head>
    <title>
        Exemplu de afisare an
    </title>
</head>
<body>
<?php
$an = 2020;
echo "An curent1:";
echo $an; ?>
<br>
<?php
$an = 2020; ?>
An curent2:
<?php
echo $an; ?>
<br>
<?php
$an = 2020; ?>
An urmator:
<?php
echo($an + 1); ?>
<br>
<?php
$an = date("Y"); ?>
An urmator:
<?php
echo($an + 1); ?>
</body>
</html>