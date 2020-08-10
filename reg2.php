<?php
session_start();
require_once('verbinding.php');
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier</title>
</head>

<body>
    <form action="reg2.php" method="post">
        Vul uw naam in:<input type="text" name="naam" id="invoerveld" class="invoer-1"><br>
        Geef een ww op:<input type="password" name="pwd"><br>
        <input type="submit" name="knop" value="Registreren">
        <input type="submit" name="knopLogin" value="Login">
    </form>
    <?php
    //indien er op de knop registreren is geklikt
    if (isset($_POST['knop']) && $_POST['knop'] = 'Registreren') {
        //is naam en ww ingevuld
        if ($_POST['naam'] == "" || $_POST['pwd'] == "") {
            echo 'Naam en wachtwoord invoeren';
            //alles ok, mag toegevoegd worden
        } else {
            $ww = $_POST['pwd'];
            $naam = $_POST['naam'];
            //db verbinding opzetten
            $verbinding = mysqli_connect($host, $user, $pwd, $db) or die('Geen verbinding tot stand kunnen brengen');
            //query klaarmaken
            $verzoek = "INSERT INTO gebruikers VALUES (NULL, '$naam', '$ww');";
            //verzenden query naar db, en kijken of dit lukt   
            if (mysqli_query($verbinding, $verzoek)) {
                $_SESSION['login'] = 1;
                header("Location: producten.php");
            } else {
                echo 'probleem bij registratie';
            }
        }
    }
    if (isset($_POST['knopLogin']) && $_POST['knopLogin'] = 'Login') {
    }
    ?>
</body>

</html>