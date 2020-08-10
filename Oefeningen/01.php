<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PWD', '');
define('DB', 'loterijdb');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="01.php" method="post">
        Vul uw leeftijd in: <input type="number" name="leeftijd" id="invoerveld" class="invoer-1">
        <br>
        <input type="submit" name="knop" value="Registreren">
    </form>


<?php

if (isset($_POST['knop']) 'Registreren') {
    if ($_POST['leeftijd'] == "") {
        echo 'Leeftijd invullen';
    } else {
        $naam = $_POST['naam'];
        $leeftijd = $_POST['leeftijd'];
        //db verbinding opzetten
        $verbinding = mysqli_connect($host, $user, $pwd, $db) or die('Geen verbinding tot stand kunnen brengen');

        $verzoek = "INSERT INTO gebruikers VALUES (NULL, '$naam', '$leeftijd');";
        
        if (mysqli_query($verbinding, $verzoek)) {
            $_SESSION['login'] = 1;
            echo 'Je bent ouder than 18. Je mag deelnemen aan de spelen van de Nationale Loterij';
        } else {
            echo 'Om deel te nemen aan de spelen van de Nationale Loterij moet je minimum 18 jaar oud zijn.';
        }
    }
}
if (isset($_POST['knopLogin']) = 'Login') {
}


?>

</body>
</html>


