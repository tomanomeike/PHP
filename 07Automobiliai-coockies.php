<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>


<form action="07Automobiliai-coockies.php" method="get">
    <div>Iveskite datą ir laiką:</div>
    <input type="text" name="date&time"/>
    <div>Įveskite automobilio numerį:</div>
    <input type="text" name="number"/>
    <div>Įveskite atstumą metrais:</div>
    <input type="text" name="distance"/>
    <div>Įveskite laiką sekundėmis:</div>
    <input type="text" name="seconds"/>
    <div><br><input type="submit" value="Išsaugoti"></div><br>
</form>
<?php

if (isset($_COOKIE['cars'])) {
    $cars = json_decode($_COOKIE['cars'], true);
} else {
    $cars = [];
}

if(isset($_GET['date&time']) && isset($_GET['number'])
&& isset($_GET['distance']) && isset($_GET['seconds'])) {
    $dateTime = $_GET['date&time'];
    $number = $_GET['number'];
    $distance = $_GET['distance'];
    $seconds = $_GET['seconds'];
    $speed = $distance / $seconds;

    $car = [
        'date' => $dateTime,
        'number' => $number,
        'distance' => $distance,
        'seconds' => $seconds,
        'speed' => $speed
    ];
    $cars[]=$car;
    setcookie('cars', json_encode($cars), time() + (86400 * 30), "/");
}
?>

<table>
    <tr>
        <th>Greičio fiksavimo data ir laikas</th>
        <th>Automobilio numeris</th>
        <th>Nuvažiuotas atstumas metrais</th>
        <th>Sugaištas laikas sekundėmis</th>
        <th>Greitis</th>
    </tr>
    <?php
    foreach ($cars as $car) {
        echo "<tr>";
        echo "<td>" . $car['date'] . " " . $car['time'] . "</td>";
        echo "<td>" . $car['number'] . "</td>";
        echo "<td>" . $car['distance'] . "</td>";
        echo "<td>" . $car['number2'] . "</td>";
        echo "<td>" . round($car['speed'], 2) . "</td>";
        echo "</tr>";
    }
    ?>
</table>


</body>
</html>