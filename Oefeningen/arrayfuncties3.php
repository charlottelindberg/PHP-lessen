<?php
session_start();

if (isset($_POST['knop']) && isset($_POST['naam'])) {
    if (isset($_SESSION['klantenlijst'])) {
        $klanten =  $_SESSION['klantenlijst'];
    } else {
        $klanten = array();
    }
    $id = $_POST['id'];
    $naam = $_POST['naam'];
    $regio = $_POST['regio'];
    $klGeg = array('id' => $id, 'naam' => $naam, 'regio' => $regio);
    array_push($klanten, $klGeg);
    $_SESSION['klantenlijst'] = $klanten;
}

echo "<table><tr><th>ID</th><th>Naam</th><th>Regio</th><th>Verwijderen</th></tr>";

if (isset($_SESSION['klantenlijst']) && $_SESSION['klantenlijst'] != '') {
    $klanten = $_SESSION['klantenlijst'];
    foreach ($klanten as $gegevens) {
        echo "<tr><td>" . $gegevens['id'] . "</td><td>" . $gegevens['naam'] . "</td><td>" . $gegevens['regio'] . "</td><td><a href='arrayfuncties3.php?indexPositie='>Verwijderen</a></td></tr>";
    }
}
echo "</table>";

echo '<form action="arrayfuncties3.php" method="post">';
echo 'ID<input type="number" name="id">';
echo 'NAAM<input type="text" name="naam">';
echo 'REGIO<input type="text" name="regio">';
echo '<input type="submit" name="knop" value="toevoegen">';
echo "</form>";
// unset($_SESSION['klantenlijst']);
