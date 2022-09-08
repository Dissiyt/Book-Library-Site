<?php

if (isset($_POST['submit'])){

    require '..//Controller/dbconnect.php';

    $benutzername = $_POST['benutzername'];
    $passwort = $_POST['password'];
    if (empty($benutzername) || empty($passwort)){
        header("Location:../View/login.php?error=emptyfields=");
        exit();
    } else{
        $sql = "SELECT * FROM benutzer WHERE benutzername = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../View/login.php?error=sqlerror=");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt, "s", $benutzername);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $passCheck = password_verify($passwort, $row['passwort']);
                if($passCheck== false){
                    header("Location:../View/login.php?error=wrongpassword=");
                    exit();
                } elseif($passCheck == true){
                    session_start();
                    $_SESSION['sessionId'] = $row['ID'];
                    $_SESSION['sessionUser'] = $row['benutzername'];
                    header("Location:../View/index.php?succes=loggedin=");
                    exit();
                } else{
                    header("Location:../View/login.php?error=wrongpassword=");
                    exit();
                }
        } else{
            header("Location:../View/login.php?error=nouser=");
            exit();
        }
    }
}
}












?>