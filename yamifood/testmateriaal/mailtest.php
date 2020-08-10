<?php
$onderwerp = "Test van gmail vanuit php";
$bericht = "Dit is een tweede mailtje, verstuurd vanuit yamifood site. Het is een bevestiging om te registreren.
http://localhost/vilvoorde/yamifood/verificatie.php?naam=dannylemmens";
$bestemming = "da.le@skynet.be";
$header = "From: Danny Lemmens";
if(mail($bestemming, $onderwerp, $bericht, $header)){
    echo 'mail verstuurd';
}else{
    echo 'probleem bij verzenden';
}

?>