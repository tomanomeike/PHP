<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Cars with MySQL</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<form action="index.php" method="post">-->
<!--    <div>Iveskite datą ir laiką:</div>-->
<!--    <input type="text" name="date&time"/>-->
<!--    <div>Įveskite automobilio numerį:</div>-->
<!--    <input type="text" name="number"/>-->
<!--    <div>Įveskite atstumą metrais:</div>-->
<!--    <input type="text" name="distance"/>-->
<!--    <div>Įveskite laiką sekundėmis:</div>-->
<!--    <input type="text" name="seconds"/>-->
<!--    <div><br><input type="submit" value="Išsaugoti"></div><br>-->
<!--</form>-->
<!---->
<!---->
<?php
//
//
//if(isset($_POST['date&time']) && isset($_POST['number'])
//    && isset($_POST['distance']) && isset($_POST['seconds'])) {
//    $dateTime = $_POST['date&time'];
//    $number = $_POST['number'];
//    $distance = $_POST['distance'];
//    $seconds = $_POST['seconds'];
//}
//else{
//}
//
//
//?>
<!--</body>-->
<!--</html>-->

<!DOCTYPE html>
<html>
<head>
    <title>Cars with MySQL</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM radars WHERE id = ". intval($_GET['delete']);
    $conn->query($sql);
}
$row = [];
if (isset($_REQUEST['edit'])) {
    $sql = "SELECT * FROM radars WHERE id = ". intval($_GET['edit']);
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}
if (isset($_REQUEST['save'])) {
    if (intval($_POST['id']) > 0) {
        echo "update";
    } else {
        echo "insert";
    }
}
?>

<form method='post'>

    <input type='hidden' name='id' required value="<?= $row['id'] ?>">

    Data: <input type='text' name='text' required value="<?= $row['date'] ?>"><br>
    Numeris: <input type='text' name='number' required value="<?= $row['number'] ?>"><br>
    Atstumas: <input type='number' name='distance' required value="<?= $row['distance'] ?>"><br>
    Laikas: <input type='number' name='time' required value="<?= $row['time'] ?>">
    <button name="save" type="submit">Išsaugoti</button>
</form>

<hr>

<?php
// išvedame automobilius
if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}
$sql = 'SELECT *, `distance`/`time`*3.6 as `speed` FROM radars ORDER BY number, date DESC LIMIT 5 OFFSET ' . $offset;
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    ?>
    <table>
        <tr>
            <th>Eil.nr</th>
            <th>ID</th>
            <th>Numeris</th>
            <th>Data</th>
            <th>Atstumas (km)</th>
            <th>Laikas (h)</th>
            <th>Greitis (km/h)</th>
            <th>Veiksmai</th>
        </tr>
        <?php
        $nr=1+$offset;
        while($row = $result->fetch_assoc()): ?>

            <tr>
                <td><?= $nr++ ?></td>
                <td><?= $row['id'] ?></td>
                <td><?= $row['number'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['distance'] ?></td>
                <td><?= $row['time'] ?></td>
                <td><?= round($row['speed']) ?></td>
                <td>
                    <a href="?edit=<?= $row['id'] ?>">Taisyti</a>
                    <a href="?delete=<?= $row['id'] ?>">Trinti</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php
} else {
    echo 'nėra duomenų';
}
?>
<hr>
<?php $count=0;
$sqlCount = "SELECT COUNT(*) FROM radars";
$allNumbers= $conn->query($sqlCount);
if (!$allNumbers) {
die("Error: " . $conn->error);
} else {
$count = $allNumbers->fetch_array()[0];
}
 if($offset+5<$count){?>
    <a href="?offset=<?php echo $offset + 5; ?>">Pirmyn</a>
<?};?>
<?php if($offset>=5){?>
    <a href="?offset=<?php echo $offset - 5; ?>">Atgal</a>
<?};
?>

</body>
</html>