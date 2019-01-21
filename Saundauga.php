<!DOCTYPE html>
<html>
<head>
    <title>Sandauga</title>
</head>
<body>

<form action="Saundauga.php" method="get">
    <div>Iveskite pirmą skaičių:</div>
    <input type="text" name="num1"/>
    <div>Įveskite antrą skaičių:</div>
    <input type="text" name="num2"/>
    <div><br><input type="submit" value="Sandauga"></div><br>
</form>

<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (isset($num1) && isset($num2)) {

    $sum = $num1 * $num2;
    echo $num1 . " * " . $num2 . " = " . $sum;

}
?>

</body>
</html>