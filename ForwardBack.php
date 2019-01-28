<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From MySQL</title>
</head>
<body>
    <h2>SQL SELECT demo</h2>
<?php

$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Nepavyko prisjungti: ' . $conn->connect_error);
}

if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

$count=0;
$sqlCount = "SELECT COUNT(*) FROM radars";
$allNumbers= $conn->query($sqlCount);
if (!$allNumbers) {
    die("Error: " . $conn->error);
} else {
    $count = $allNumbers->fetch_array()[0];
}


$sql = "SELECT *, ROUND(distance/time) AS speed FROM radars ORDER BY date DESC LIMIT 5 OFFSET " . $offset;
if (!($result = $conn->query($sql))) {
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "Yes :) " . $result->num_rows;
    $nr = 1 + $offset;
    while ($row = $result->fetch_assoc()) {
        echo "<br>" . ($nr++) . " " . $row["number"] . " " . $row["speed"];
    }

} else {
    echo "Nera duomenu :(";
}

?>
<hr>
    <?php if($offset+5<$count){?>
<a href="?offset=<?php echo $offset + 5; ?>">Pirmyn</a>
    <?};?>
    <?php if($offset>=5){?>
<a href="?offset=<?php echo $offset - 5; ?>">Atgal</a>
    <?};?>



</body>
</html>