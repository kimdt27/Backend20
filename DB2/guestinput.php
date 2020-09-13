<?php
require ("conn.php");
if(isset($_POST["submit"])){
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $age= $_POST["age"];

    mysqli_set_charset($conn, "utf8");

$query = "INSERT INTO `guests` (`ID`, `fname`, `lname`, `age`) 
            VALUES (NULL, '$fname', '$lname', '$age');";

if(!mysqli_query($conn, $query)){
    die("error". mysqli_error($conn));
}

}


