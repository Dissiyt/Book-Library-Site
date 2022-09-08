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
    <p> Already have a accoount? <a href="login.php">Login</a></p>

    <form action ="../Model/registerdb.php" method= "POST">
        <input type="text" name= "benutzername" placeholder = "Benutzername">
        <input type="password" name="password" placeholder = "Password">
        <input type="password" name="confirmPassword" placeholder = "Confirm Password">
        <button type="submit" name="submit"> Register </button>
    </form>
    
</body>
</html>
<?php
    require_once 'footer.php'
?>