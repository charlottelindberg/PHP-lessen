<form action="receptToevoegen.php" method="post" enctype="multipart/form-data">
    Id van het gerecht:<input type="text" name="id">
    Selecteer pdf: <input type="file" name="recept">
    <input type="submit" name="knop" value="Recept Toevoegen">
</form>


<?php
include_once('includes/database.inc.php');
$id = $_POST['id'];


move_uploaded_file($_FILES['recept']['tmp_name'], "recepten/recept".$id.".pdf");

$db = verbinding();
$vraag ="UPDATE gerechten SET recept = 'recept".$id.".pdf' WHERE id =".$id.";";
$antw = mysqli_query($db, $vraag);
?>