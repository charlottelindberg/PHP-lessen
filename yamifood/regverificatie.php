<?php
session_start();
require('includes/database.inc.php');
if(!isset($_GET['mail'])){
    header("Location: index.php");
}
else
{
    if(!isset($_GET['naam'])){
        if($_GET['mail']=="ok"){
            echo 'Er is een bevestigingsmail verstuurd. Check uw mailbox.<br>';
            echo '<a href="index.php">Terug naar homepagina</a>';
        }else{
            echo 'Er is een iets fout gelopen met het sturen van een mail.<br>';
            echo 'Ga terug naar de registratiepagina en probeer opnieuw<br>';
            echo '<a href="admin.php">Terug naar registreren</a>'; 
        }
    }else{
        $naam = $_GET['naam'];
        $mail = $_GET['mail'];
        $gevonden = gebruikerOpzoekenObvMail($naam, $mail);
        //var_dump($gevonden);
        $id = $gevonden['id'];
        $statChange = pasStatusAan($id);
    }
}

?>