<?php

if (isset($_POST['submit'])){
    //Add db connection
    require '..//Controller/dbconnect.php';

    $benutzername = $_POST['benutzername'];
    $passwort = $_POST['password'];
    $confirm = $_POST['confirmPassword'];

    if (empty($benutzername) || empty($passwort) || empty($confirm)){
        header("Location:../View/register.php?error=emptyfields&username=".$benutzername );
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*/ ", $benutzername)){
        header("Location:../View/register.php?error=invalidusername=".$benutzername );
        exit();

    } elseif($passwort !== $confirm) {
        header("Location:../View/register.php?error=passwordsdonotmatch=".$benutzername );
        exit();
    } else {
        $sql = "SELECT benutzername FROM benutzer WHERE benutzername = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../View/register.php?error=sqlerror" );
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $benutzername);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0){
                header("Location:../View/register.php?error=usernametaken" );
                exit();
            } else {
                $sql = "INSERT INTO benutzer (benutzername, passwort) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:../View/register.php?error=sqlerror" );
                    exit();
                } else{
                    $hashedPass = password_hash($passwort, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $benutzername, $hashedPass);
                    mysqli_stmt_execute($stmt);
                        header("Location:../View/register.php?succes=registered" );
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}






?>