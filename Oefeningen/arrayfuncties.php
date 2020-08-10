<?php
// array aanmaken, gebaseerd op 0-based index
$lijst = array('Andrea', 'Arno', 'Azzam', 'Hakim', 'Charlotte', 'Laura', 'Sandy');
// print_r($lijst);
echo $lijst[2];
$lijst[2] = 'Maude';
print_r($lijst);
echo '<p>';

// array met key-value paren (pairs)
$cursist1 = array('naam' => 'Sandy', 'woonplaats' => 'Vilvoorde', 'opleiding' => 'Webdesign');
echo $cursist1['woonplaats'];
echo '<p>';

$cursist2 = array('naam' => 'Bella', 'woonplaats' => 'Ghent', 'opleiding' => 'Webdesign');
echo $cursist2['woonplaats'];
echo '<p>';

$cursist3 = array('naam' => 'Jenna', 'woonplaats' => 'Leuven', 'opleiding' => 'Webdesign');
echo $cursist3['woonplaats'];
echo '<p>';

$cursist4 = array('naam' => 'Hanna', 'woonplaats' => 'Antwerpen', 'opleiding' => 'Webdesign');
echo $cursist4['woonplaats'];
echo '<p>';

$leerlingen = array($cursist1, $cursist2, $cursist3, $cursist4);
// print_r($leerlingen);
// echo $leerlingen[1]['naam'];

// toon de namen en woonplatsen van de cursisten
// count() telt de aantal elementen in een array
$aantal_leerlingen = count($leerlingen);
// echo $aantal_leerlingen;
for ($i = 0; $i < $aantal_leerlingen; $i++) {
    echo $leerlingen[$i]['naam'] . "\t\t" . $leerlingen[$i]['woonplaats'] . "\t\t" . "<br>";
}

foreach ($leerlingen as $cursGeg) {
    echo $cursGeg['naam'] . "\t\t" . $cursGeg['woonplaats'] . "\t\t" . "<br>";
}
