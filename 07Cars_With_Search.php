<?php
//setcookie('cars', "", time() + (86400 * 30), "/");
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
        'date&time' => $dateTime,
        'number' => $number,
        'distance' => $distance,
        'seconds' => $seconds,
        'speed' => $speed
    ];
    $cars[]=$car;
    setcookie('cars', json_encode($cars), time() + (86400 * 30), "/");
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars with search</title>
</head>
<body>


<form action="07Cars_With_Search.php" method="get">
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
        echo "<td>" . $car['date&time'] . "</td>";
        echo "<td>" . $car['number'] . "</td>";
        echo "<td>" . $car['distance'] . "</td>";
        echo "<td>" . $car['seconds'] . "</td>";
        echo "<td>" . round($car['speed'], 2) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<form class="search" action="07Cars_With_Search.php" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Ieškoti.." name="search2">
</form>
<?php

if(isset($_GET['search2'])) {
    $search = $_GET['search2'];
    //$subject = $car['number'];
    $searchLower = strtolower($search);
    $searchUpper = strtoupper($search);
    $unfilteredCars = $cars;
    $cars = [];
    $pattern= "/\b\w*(" . $searchLower . "|" . $searchUpper . ")\w*\b/";
    foreach ($unfilteredCars as $car) {
        preg_match($pattern,  $car['number'], $matches, PREG_OFFSET_CAPTURE);
        if(count($matches) > 0) {
            $cars[] = $car;
            //print_r($car);
        }
        }

}
?>
<?php
    foreach ($cars as $car) {
        echo "<br>" . "Laikas " . $car['date&time'];
        echo "<br>" . "Automobilio numeris " . $car['number'];
        echo "<br>" . "Atstumas " . $car['distance'] ;
        echo "<br>" . "Sekundės " . $car['seconds'];
        echo "<br>" . "Greitis " . round($car['speed'], 2);

    }
    ?>
<style>
    body {
        font-family: Arial;
    }

    * {
        box-sizing: border-box;
    }

    form.search input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }



    form.search button:hover {
        background: #0b7dda;
    }

    form.search::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
</body>
</html>