<?php
require '..//Controller/dbconnect.php';
$sql = "SELECT * FROM buecher";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
}

?>