<?php
    include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="./img/Google-logo.png" alt=""> <span>Privacy e Termini</span>
    </div>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="">Introduzione</a></li>
                <li><a href="">Norme sulla privacy</a></li>
                <li><a href="">Termini di servizio</a></li>
                <li><a href="">Tecnologie</a></li>
                <li><a href="">Domande frequenti</a></li>  
            </ul>
        </nav>

    </div>
</header>
<main>
    <?php   
        foreach ($data as $key => $value){ ?>
            <div class="question">
                <h2><?= $key ?></h2>
                <p><?= $value?></p>
            </div>    
        <?php }   
    ?>
</main>
</body>
</html>