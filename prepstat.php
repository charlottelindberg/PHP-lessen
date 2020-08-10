<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PWD', '');
define('DB', 'yamifood');

function gerechtToevoegen($cat, $gerecht, $afb, $omschr, $actief, $prijs)
{

    // object gebaseerd dataverbinding 
    $verbinding = new mysqli(HOST, USER, PWD, DB);

    // controleren of de verbinding gemaakt kan worden 
    if ($verbinding->connect_error) {
        die('Verbindingsfout' . $verbinding->connect_error);
    }

    // indien ok, prepare statement en koppel de data 
    $statement = $verbinding->prepare("INSERT INTO gerechten (categorie, gerecht, afbeelding, beschrijving, actief, prijs) VALUES (?, ?, ?, ?, ?, ?);");
    // var_dump($statement);
    // vier mogelijke types gegevens kunnen verstuurd worden:
    // i integer, s string, d double, b blob 
    $statement->bind_param("ssssid", $cat, $gerecht, $afb, $omschr, $actief, $prijs);

    $statement->execute();
    $statement->close();
    $verbinding->close();
}

gerechtToevoegen('drinks', 'Champagne Cocktail', 'img-03.jpg', 'Lekkere cocktail met een vleugje champagne.', 1, 6.99);
