<?php
function verificatiemail($naam, $mail){
    $onderwerp = "Registratie bij Yamifood";
    $bericht = "Dit is een automatisch gegenereerde mail voor de voltooing van uw registratie. Klik op onderstaande link om de registratie te voltooien. \n
    http://localhost/vilvoorde/yamifood/regverificatie.php?naam=".$naam."&mail=".$mail;
    $bestemming = $mail;
    $header = "From: Yamifood";
    if(mail($bestemming, $onderwerp, $bericht, $header)){
        header("Location: regverificatie.php?mail=ok");
    }else{
        header("Location: regverificatie.php?mail=fout");
    }
}
?>