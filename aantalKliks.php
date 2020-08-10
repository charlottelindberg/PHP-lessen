<?php session_start();
if (!isset($_SESSION['aantal'])) {
    $_SESSION['aantal'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Verwerken</title>
</head>

<body>

    <form action="aantalKliks.php" method="get">
        <input type="submit" name="knop" value="Versturen">
    </form>

    <?php

    if (isset($_GET['knop'])) {
        $_SESSION['aantal'] += 1;
    }

    echo "Aantal keren geklikt: " . $_SESSION['aantal'];

    ?>

</body>

</html>