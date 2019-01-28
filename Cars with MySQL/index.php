<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-21
 * Time: 19:16
 */
require_once "connect.php";
$conn=connectDB();
require_once "form.php";
//require_once "show.php";
require_once "table.php";
//table($conn, $count, $offset);


//$page = 10;
//$offset = 0;
//$id=$_GET ['id'];
//
//$sql = "DELETE FROM radars WHERE id = ?";
//$stmt = $conn->prepare($sql);
//$stmt->bind_param("i", $id);
//$stmt->execute();
