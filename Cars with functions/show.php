<?php
function table($conn, $count, $offset)
{
    if (isset($_GET['offset'])) {
        $offset = $_GET['offset'];
    } else {
        $offset = 0;
    }
    $sql = 'SELECT *, `distance`/`time`*3.6 as `speed` FROM radars ORDER BY number, date DESC LIMIT 5 OFFSET ' . $offset;
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        ?>

        <table border=1>
            <tr>
                <th>Eil.nr</th>
                <th>ID</th>
                <th>Numeris</th>
                <th>Data</th>
                <th>Atstumas </th>
                <th>Laikas </th>
                <th>Greitis (km/h) </th>
                <th>Veiksmai</th>
            </tr>
            <?php
            $nr = 1 + $offset;
            while ($row = $result->fetch_assoc()): ?>

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
    <?php $count = 0;
    $sqlCount = "SELECT COUNT(*) FROM radars";
    $allNumbers = $conn->query($sqlCount);
    if (!$allNumbers) {
        die("Error: " . $conn->error);
    } else {
        $count = $allNumbers->fetch_array()[0];
    }
    if ($offset + 5 < $count) {
        ?>
        <a href="?offset=<?php echo $offset + 5; ?>">Pirmyn</a>
        <?
    }; ?>
    <?php if ($offset >= 5) { ?>
    <a href="?offset=<?php echo $offset - 5; ?>">Atgal</a>
    <?
};
}
?>
