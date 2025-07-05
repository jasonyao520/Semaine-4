<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display:flex ;
        flex-direction:column;
        gap:20px;
    }
</style>
<body>
    <?php
    $a = 20;
    $b = 14;
    ?>
    <p>
        $a = 20; et 
        $b = 14;
    </p>
    <p>voici l'Addition $a + $b = <?php echo $a + $b; '<br>'; ?></p>
    <p>voici la soustraction $a - $b =<?php echo $a - $b; '<br>'; ?></p>
    <p>voici la  division $a / $b =<?php echo $a / $b; '<br>'; ?></p>
    <p>voici la multiplication $a * $b = <?php echo $a * $b; '<br>'; ?></p>
    <p>voici la modulo de  $a % $b = <?php echo $a % $b; '<br>'; ?></p>
</body>
</html>





