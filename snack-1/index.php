<?php

/* ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 */

$partite = [
    "partita1" => ["Olimpia Milano - Cantù", "35 - 20"],
    "partita2" => ["Torino - Roma", "20 - 40"],
    "partita3" => ["Napoli - Salerno", "35 - 25"],
];
var_dump($partite);

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

    <h3>
        <?php foreach ($partita as $partite) {
            echo $partita;
        } ?>
    </h3>


</body>

</html>