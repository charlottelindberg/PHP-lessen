<?php

// parameters om db te kunnen aanspreken
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'winkeldb';
// define('HOST', 'localhost');
// require_once('verbinding.php')

$naam = "Jan";
$wachtwoord = "pwd111";


// verbinding maken met db
$verbinding = mysqli_connect($host, $user, $pwd, $db) or die('Geen verbinding tot stand kunnen brengen.');
// var_dump($verbinding);

$vraag = "SELECT * FROM gebruiker WHERE naam='$naam' AND pwd='$wachtwoord';";
$antwoord = mysqli_query($verbinding, $vraag);
if ($naam <> "" && $wachtwoord <> "") {
} elseif ($naam == "" && $wachtwoord == "") {
} elseif ($naam == "") {
} else {
}

// if (mysqli_num_rows($antwoord) > 0) {
//     echo "gebruiker gevonden";
// } else {
//     echo "naam of pwd verkeerd";
// };


// var_dump($verbinding);
// gebruikergegevens opvragen en tonen
//     $vraag = "SELECT * FROM gebruikers;";

//     $antwoord = mysqli_query($verbinding, $vraag);
//     var_dump($antwoord);
//     echo mysqli_num_rows($antwoord);
// while($rij = mysqli_fetch_row($antwoord)){
//     echo $rij[0]." ".$rij[1]." ".$rij[2]."<br>";
// }
