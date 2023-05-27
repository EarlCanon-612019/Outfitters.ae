<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "outfitters";


$conn = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");

if (!$conn) {
    echo "Connection Failed";
}