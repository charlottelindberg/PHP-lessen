<!-- vraag de gebruiker om getallen in te geven
wanneer 0 wordt ingetypt, stop de invoer
toen alle ingevoerde getallen en de som daarvan -->

<?php session_start() ?>

<form method="get" action="1.3.2.php">
    Geef getallen op, 0 om te stoppen:
    <input type="number" name="getal">
    <input type="submit" name="knop" value="Toevoegen">
</form>

<?php

if (isset($_GET['getal'])) {

    if ($_GET['getal'] <> 0) {
        if (!isset($_SESSION['getallen'])) {
            $_SESSION['getallen'] = array();
        }

        array_push($_SESSION['getallen'], $_GET['getal']);
    } else {
        $totaalVanDeGetallen = 0;

        foreach ($_SESSION['getallen'] as $item) {
            $totaalVanDeGetallen += $item;
            echo $item . '<br>';
        }
        unset($_SESSION['getallen']);
        echo 'Het totaal is ' . $totaalVanDeGetallen;
    }
}
?>