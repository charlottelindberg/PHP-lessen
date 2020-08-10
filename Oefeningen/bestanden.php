<?php

// bestand toewijzen aan een variabel, bestand openen om te lezen, schrijven of toevoegen

/* $bestand = fopen("gegevens.txt", "a");
fwrite($bestand, "Diana Walker");
fclose($bestand); */

// bestand inlezen

/* $grootte = filesize("gegevens.txt");
echo 'Het bestand heeft een grootte van: ' . filesize("gegevens.txt") . '<br>';
echo 'Het type van bestand is: ' . filetype("gegevens.txt");
$namenlijst = fopen("gegevens.txt", "r");
$waarde = fread($namenlijst, $grootte);
echo $waarde;
fclose($namenlijst); */
?>

<!-- uploaden van een bestand -->
<form action="bestanden.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bestand">
    <br>
    <input type="submit" name="knop" value="UPLOADEN">
</form>

<?php
// verwerken van de upload en bestand een definitieve plaats geven
$map = "fotos/";
$bestandsnaam = strtolower($_FILES['bestand']['name']);
$bestemming = $map . $bestandsnaam;


// wat is het bestandstype van het te uploaden bestand
$type = strtolower(pathinfo($bestemming, PATHINFO_EXTENSION));
if ($type == "jpg" || $type == "jpeg" || $type == "png" || $type == "gif") {
    if (filesize($_FILES['bestand']['tmp_name']) > 200000) {
        move_uploaded_file($_FILES['bestand']['tmp_name'], $bestemming);
    } else {
        echo 'Verkeerd bestandstype, kies jpg, jpeg, png of gif.';
        echo '<br>';
        echo 'Bestandsgrootte max 200kb';
    }
}

// controle op de bestandsgrootte
// if (filesize($_FILES['bestand']['tmp_name']) > 200000) {
//     echo "Bestandsgrootte max 200kb";
// } else {
//     echo "Bestand OK";
// }


// wat is het bestandstype van het te uploaden bestand
/* echo pathinfo($bestemming, PATHINFO_EXTENSION); */
?>