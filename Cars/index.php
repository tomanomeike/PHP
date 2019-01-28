<?php
require_once "html.php";
require_once  "connect.php";
$conn=connectDB();
require_once "form.php";
require_once "show.php";
table($conn, $count, $offset);

