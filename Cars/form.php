<?php
$date = $_POST['date'];
$number = $_POST['number'];
$distance = $_POST['distance'];
$time = $_POST['time'];
$id =  $_POST['id'];



if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM radars WHERE id = ". intval($_REQUEST['delete']);
    $conn->query($sql);
}
$row = [];
if (isset($_REQUEST['edit'])) {
    $sql = "SELECT * FROM radars WHERE id = ". intval($_REQUEST['edit']);
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}
if (isset($_REQUEST['save'])) {
    if (intval($_REQUEST['id']) > 0) {
        $sql = "UPDATE radars SET  date = ?, number = ?, distance = ?, time =?  WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssddi",$date, $number, $distance, $time, $id);
        $stmt->execute();
       // var_dump($id);
    } else {
        $insert = "INSERT INTO radars(date, number, distance, time) VALUES('$date', '$number', $distance, $time)";
if (!$conn->query($insert)) {
    echo "Klaida: ". $conn->error;
}
    }
}

?>
<form method='post'>

    <input type='hidden' name='id' required value="<?= $row['id'] ?>">
    <div>Data ir laikas:</div>
<input type='datetime' name='date' required value="<?= $row['date'] ?>">
    <div>Automobilio numeris:</div>
 <input type='text' name='number' required value="<?= $row['number'] ?>">
    <div>Atstumas metrais:</div>
    <input type='number' name='distance' required value="<?= $row['distance'] ?>">
    <div>Laikas sekundėmis:</div>
<input type='number' name='time' required value="<?= $row['time'] ?>">
    <button name="save" type="submit">Išsaugoti</button>
</form>
