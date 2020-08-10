<form action="gerToevoegen.php" method="post" enctype="multipart/form-data">
    Categorie: <input type="text" name="cat"><br>
    Titel/naam: <input type="text" name="titel"><br>
    Beschrijving: <input type="text" name="beschrijving"><br>
    Prijs: <input type="text" name="prijs"><br>
    Actief 1/0: <input type="number" name="actief"><br>
    Kies foto: <input type="file" name="afbeelding">
    <input type="submit" name="knop" value="GERECHT TOEVOEGEN">
</form>

<?php 
include_once('includes/database.inc.php');
if(isset($_POST['knop'])){
    $cat = $_POST['cat'];
    $titel = $_POST['titel'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $actief = $_POST['actief'];

    $map = "images/";
    $bestandsnaam = strtolower($_FILES['afbeelding']['name']);
    $bestemming = $map.$bestandsnaam;
    $type = strtolower(pathinfo($bestemming, PATHINFO_EXTENSION));
    if($type == "jpg" || $type == "jpeg" ||$type == "png" ||$type == "gif"){
        if(filesize($_FILES['afbeelding']['tmp_name'])<400000){
            move_uploaded_file($_FILES['afbeelding']['tmp_name'], $bestemming);
        }else{
            echo "Bestand max 400k";
        }

    }else{
        echo 'Verkeerd bestandstype, kies jpg, jpeg, png of gif.';
    }

gerechtToevoegen($cat, $titel, $bestandsnaam, $beschrijving, $actief, $prijs);
}
?>




