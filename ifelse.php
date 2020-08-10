<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfElse</title>
</head>
<body>
    
<form action="ifelse.php" method="get">
        Gebruiker:<input type="text" name="invoer" id="invoerveld" class="invoer-1">
        <input type="submit" name="knop" value="Versturen">
    </form>

    <?php
if(isset($_GET['invoer'])){
    $naam = $_GET['invoer'];
    if($naam == "Charlotte"){
        echo "Welkom $naam, je bent administrator";
    }elseif($naam == "Sandy"){
        echo "Welkom $naam, je bent gebruiker";
    }elseif ($naam=="") {
        echo "Je moet een gebruikersnaam invoeren.";
    }else {
        echo "Welkom $naam, je bent bezoeker";
    }
}
?>

</body>
</html>