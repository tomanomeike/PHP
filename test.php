<?php
//setcookie('cars', "", time() + (86400 * 30), "/");
if (isset($_COOKIE['cars'])) {
    $cars = json_decode($_COOKIE['cars'], true); //parametras true nurodo, kad norim masyvo, o ne objektu

} else {
    $cars = [];
}

if(isset($_GET['date']) && isset($_GET['time']) && isset($_GET['number'])
    && isset($_GET['distance']) && isset($_GET['number2'])) {
    $date = $_GET['date'];
    $time = $_GET['time'];
    $number = $_GET['number'];
    $distance = $_GET['distance'];
    $number2 = $_GET['number2'];
    $speed = $distance / $number2;

    $car = [
        'date' => $date,
        'time' => $time,
        'number' => $number,
        'distance' => $distance,
        'number2' => $number2,
        'speed' => $speed
    ];

    $cars[] = $car;

    usort($cars, function ($car1, $car2) {
        return $car2['speed'] <=> $car1['speed'];
    });

    setcookie('cars', json_encode($cars), time() + (86400 * 60), "/");
}

if(isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    usort($cars, function ($car1, $car2) {
        return $car2['speed'] <=> $car1['speed'];
    });

    $unfilteredCars = $cars;
    $cars = [];

    $regexp = "/\b\w*(" . $filter . ")\w*\b/";

    foreach($unfilteredCars as $car) {
        $matches = [];
        preg_match($regexp, $car['number'],$matches);

        if(count($matches) > 0) {
            $cars[] = $car;
        }
    }
}
?>
<table>
    <tr>
        <form>
            <td>Filtruoti numerius</td>
            <td colspan="3"><input type="text" name="filter"></td>
            <td><input class="btn" type="submit" name="submit" value="Filtruoti"></td>
        </form>
    </tr>
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