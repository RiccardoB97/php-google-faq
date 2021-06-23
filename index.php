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
</head>
<body>
<?php 
    
    foreach ($data as $key => $value){ ?>
        <div class="question">
            <h2><?= $key ?></h2>
            <p><?= $value?></p>
        </div>    
    <?php }   


?>
</body>
</html>