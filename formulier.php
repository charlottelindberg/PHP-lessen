<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
</head>

<body>

    <form action="formulier.php" method="get">
        <input type="text" name="invoer" id="invoerveld" class="invoer-1">
        <input type="submit" name="knop" value="Versturen">
    </form>
    <?php
    // isset controleert of de variabele bestaat
    if (isset($_GET['invoer']) && isset($_GET['knop'])) {
        $naam = $_GET['invoer'];
        echo "<br>" . $naam;
        echo "
        <table>
        <tr>
        <th>Voornaam</th><th>Naam</th>
        </tr>
        <tr>
        <td>Charlotte</td><td>Lindberg</td>
        </tr>
        <tr>
        <td>Maurits</td><td>Wouters</td>
        </tr>
        </table> ";
    }

    // for loop (of lus)
    // $i = 0;
    // for ($i; $i < 10; $i++) {
    //     echo $i . "<br>";
    // }
    // $lijst = ['Arno, Danny, Charlotte']
    // $lijst=[naam=>Arno, woonplaats=>Vilvoorde]
    // $a = 10;
    // if ($a < 20) {
    //     echo "getal is kleiner dan 20";
    // }


    ?>

</body>

</html>