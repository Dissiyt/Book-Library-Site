<?php
    require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Log In</h1>
    <p> New? <a href="register.php">Create Account</a></p>

    <form action ="../Model/logindb.php" method= "POST">
        <input type="text" name= "benutzername" placeholder = "Benutzername">
        <input type="password" name="password" placeholder = "Password">
        <button type="submit" name="submit"> Login </button>
    </form>
    
</body>
</html>
<?php
    require_once 'footer.php'
?>