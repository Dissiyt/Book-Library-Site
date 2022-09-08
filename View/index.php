<?php
require_once '../Controller/dbconnect.php';
require_once 'header.php';
require_once '../Model/booksdb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-800">
    <div class="pl-20 pt-4 text-white">
        <p>Home</p>
        <?php
        if(isset($_SESSION['sessionId'])){
            echo "Wilkommen Sie sind eingeloggt";
        }
    ?>
    </div>
   
    <?php foreach($result as $liste){ ?>
    <div class="pl-20 text-white border-4">
        <label for="title">Title</label> 
        <br>
        <span name="title" class="align-baseline"><?php echo htmlspecialchars($liste['title']);?> </span>
        <br>
        <label for="beschreibung">Beschreibung</label>
        <br>
        <span name="kurztitle" class="align-baseline"><?php echo htmlspecialchars($liste['kurztitle']);?></span>
        <br>
        <label for="kate">Kategorie</label>
        <br>
        <span name="kate" class="align-baseline"><?php echo htmlspecialchars($liste['kategorie']);?></span>
        <br>
        <label for="kata">Autor</label>
        <br>
        <span name="kata" class="align-baseline"><?php echo htmlspecialchars($liste['autor']);?></span>
    </div>

<?php } ?>
</body>
</html>
<?php
require_once 'footer.php';
?>