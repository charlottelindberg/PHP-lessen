<?php
define('HOST','localhost');
define('USER','root');
define('PWD','');
define('DB', 'yamifood');

function verbinding(){
    $db = mysqli_connect(HOST, USER, PWD, DB);
    return $db;
}

function gerechtToevoegen($cat, $gerecht, $afb, $omschr, $actief, $prijs){
    //Object gebaseerde databaseverbinding
    $verbinding = new mysqli(HOST,USER,PWD,DB);

    //Controleren of de verbinding gemaakt kan worden
    if($verbinding->connect_error){
        die('Verbindingsfout' . $verbinding->connect_error);
    }

    //indien verbinding ok, prepare statement en koppel de data
    $statement = $verbinding->prepare("INSERT INTO gerechten (categorie, gerecht, afbeelding, beschrijving, actief, prijs) VALUES (?,?,?,?,?,?);");
    /*vier mogelijke types gegevens kunnen verstuurd worden:
    i integer, s string, d double, b blob*/
    $statement->bind_param("ssssid", $cat, $gerecht, $afb, $omschr, $actief, $prijs);
    //query uitvoeren met de data
    $statement->execute();
    //sluiten van verbindingen 
    $statement->close();
    $verbinding->close();
}

function gebruikerToevoegen($naam, $pwd, $email, $status=4){
    //Object gebaseerde databaseverbinding
    $verbinding = new mysqli(HOST,USER,PWD,DB);

    //Controleren of de verbinding gemaakt kan worden
    if($verbinding->connect_error){
        die('Verbindingsfout' . $verbinding->connect_error);
    }

    //indien verbinding ok, prepare statement en koppel de data
    $statement = $verbinding->prepare("INSERT INTO gebruikers (naam, pwd, email, staat) VALUES (?,?,?,?);");
    /*vier mogelijke types gegevens kunnen verstuurd worden:
    i integer, s string, d double, b blob*/
    $statement->bind_param("sssi", $naam, $pwd, $email, $status);
    //query uitvoeren met de data
    $statement->execute();
    //sluiten van verbindingen 
    $statement->close();
    $verbinding->close();
}

function gebruikerOpzoeken($naamUser, $wwUser){
    $verbinding = new mysqli(HOST,USER,PWD,DB);
    if($verbinding->connect_error){
        die('Verbindingsfout' . $verbinding->connect_error);
    }
    $stmt = $verbinding->prepare("SELECT * FROM gebruikers WHERE (naam = ? AND pwd = ?);");
    $stmt->bind_param("ss", $naamUser, $wwUser);
    $stmt->execute();
    $antwoord = $stmt->get_result();
    if($antwoord->num_rows == 0){
        return 'fout';
        exit;
    }else{
        $rij = $antwoord->fetch_assoc();
        $gevondenNaam = $rij['naam'];
        $gevondenId = $rij['id'];
        $gevondenStatus = $rij['status'];
        $gegevens=['naam'=>$gevondenNaam, 'id'=>$gevondenId, 'status'=>$gevondenStatus];
    }
    $stmt->close();
    $verbinding->close();
    return $gegevens;
}

function gebruikerOpzoekenObvMail($naamUser, $mailUser){
    $verbinding = new mysqli(HOST,USER,PWD,DB);
    if($verbinding->connect_error){
        die('Verbindingsfout' . $verbinding->connect_error);
    }
    $stmt = $verbinding->prepare("SELECT * FROM gebruikers WHERE (naam = ? AND email = ?);");
    $stmt->bind_param("ss", $naamUser, $mailUser);
    $stmt->execute();
    $antwoord = $stmt->get_result();
    if($antwoord->num_rows == 0){
        return 'fout';
    }else{
        $rij = $antwoord->fetch_assoc();
        $gevondenNaam = $rij['naam'];
        $gevondenId = $rij['id'];
        $gevondenStatus = $rij['staat'];
        $gegevens=['naam'=>$gevondenNaam, 'id'=>$gevondenId, 'status'=>$gevondenStatus];
    }
    $stmt->close();
    $verbinding->close();
    return $gegevens;
}
?>