<?php
require_once("conn.php");
$query = "SELECT * FROM guests";
$res = $db->query($query, PDO::FETCH_ASSOC);

foreach ($res as $row){
    echo $row["ID"]. " - ";
    echo $row["fname"]. " - ";
    echo $row["lname"]. " - ";
    echo $row["age"]. "<br>";
}

$db=null;