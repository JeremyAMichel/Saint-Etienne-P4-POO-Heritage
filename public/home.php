<?php

include_once "../utils/autoloader.php";

$chien = new Chien();
$chien->setWeight(10.2);
var_dump($chien);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $chien->crie();  ?></p>
    <p><?= $chien->info(); ?></p>
    <p><?= $chien->infoPlus(); ?></p>
</body>

</html>