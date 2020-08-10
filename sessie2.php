<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<h2>Welkom " . $_SESSION['naam'] . '</h2>';
    ?>

    <h3>Bestaat de sessie nog?</h3>
    <p>Eeenmaal een sessie gestart is, blijft ze actief totdat de browser gesloten wordt of de sessie vernietigd.</p>
</body>

</html>