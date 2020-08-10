<?php
$verbinding = mysqli_connect('localhost', 'root', '', 'garage');
$vraag = "SELECT * FROM klanten;";
$antwoord = mysqli_query($verbinding, $vraag);
// var_dump($antwoord);

// 1) zet een array klaar $klanten = array()
// 2) lus die door de recordset loopt en rij per rij toevoegt aan een array
// 3) elke rij uit de recordset bevat id, naam, regio = 3 waarden / elementen
// 4) elk element uit een rij voeg je toe aan een array, waarbij je de naam van het veld gebruikt als key De waarde als value: array('id'=>1, 'naam'=>'Hakim', 'regio'=>'Zuid';)

// 1 
// $klant1 = array('id' => '1', 'naam' => 'Maurits', 'regio' => 'Noord');

// $klant2 = array('id' => '2', 'naam' => 'Hakim', 'regio' => 'Zuid');

// $klant3 = array('id' => '3', 'naam' => 'Azzam', 'regio' => 'Noord');

// $klant4 = array('id' => '4', 'naam' => 'Wout', 'regio' => 'Zuid');

// $klanten = array($klant1, $klant2, $klant3, $klant4);

$klanten = array();
$klant = array();

while ($rij = mysqli_fetch_row($antwoord)) {
    $klant['id'] = $rij[0];
    $klant['naam'] = $rij[1];
    $klant['regio'] = $rij[2];
    array_push($klanten, $klant);
}

// print_r($klanten);
// $klanten
echo "<table><tr><th>ID</th><th>Naam</th><th>Regio</th></tr>";

foreach ($klanten as $tabelklanten) {
    echo "<tr><td>" . $tabelklanten['id'] . "</td><td>" . $tabelklanten['naam'] . "</td><td>" . $tabelklanten['regio'] . "</td></tr>";
}

echo "</table>";

echo '<form action="arrayfunctions3.php" method="post">';
echo 'ID<input type="number" name="id">';
echo 'NAAM<input type="text" name="naam">';
echo 'REGIO<input type="submit" name="knop" value="toevoegen">';
echo "</form>";
