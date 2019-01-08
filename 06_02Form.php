<!DOCTYPE html>
<html>
<head>
    <title>Sum</title>
</head>
<body>

<form action="06_02Form.php" method="get">
    <div>Iveskite pirmą skaičių:</div>
    <input type="number" name="num1"/>
    <div>Įveskite antrą skaičių:</div>
    <input type="number" name="num2"/>
    <div><br><input type="submit" value="Sudėti"></div><br>
</form>

<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (isset($num2) && isset($num2)) {

    $sum = $num1 + $num2;
    echo $num1 . " + " . $num2 . " = " . $sum;
}
?>

</body>
</html>