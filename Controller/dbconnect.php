<?php

$dbHost = "localhost";
$User = "root";
$password = "";
$db = "books";

$conn = mysqli_connect($dbHost, $User, $password, $db);

if (!$conn){
    die("Database connection failed");
}



?>