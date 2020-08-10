<?php require_once('verbinding.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="registreren.php" method="post">
        Vul uw naam in: <input type="text" name="naam" id="invoerveld" class="invoer-1">
        Geef een wachtwoord in: <input type="password" name="pwd"><br>
        <input type="submit" name="knop" value="Registreren">
    </form>


    <!-- $ww = $_POST
    <!-- $vraag = INSERT INTO gebruikers VALUES(NULL, '$naam', '$wachtwoord'); -->

    <!-- if(INSERT INTO gebruikers VALUES(NULL, '$naam', '$ww');){ -->

    <!-- } -->

</body>

</html>