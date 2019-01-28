<?php
require_once "html.php";
require_once  "connect.php";
$conn=connectDB();
require_once "form.php";
del($conn);
updateOrInsert($conn,$date, $number, $distance, $time, $id);
require_once "show.php";
table($conn, $count, $offset);

