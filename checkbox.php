<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfElse</title>
</head>
<body>
    
<form action="checkbox.php" method="get">
        <input type="checkbox" name="fruit[]" value="Banaan">Banaan<br>
        <input type="checkbox" name="fruit[]" value="Appel">Appel<br>
        <input type="checkbox" name="fruit[]" value="Kiwi">Kiwi<br>
        <input type="checkbox" name="fruit[]" value="Peer">Peer<br>
        <input type="checkbox" name="fruit[]" value="Pompelmoes">Pompelmoes<br>
        <input type="submit" name="knop" value="Versturen">
    </form>

<?php
if(isset($_GET['knop'])){
    // var_dump($_GET['fruit']);
    //bewaar de lijst van de gekozen fruitsoorten in fruit. dit is een array.
    $fruit = $_GET['fruit'];
    //tel hoeveel elementen in de fruit array zitten
    $aantalElementen = count($fruit);    
    //maak en lus die voor het aantal elementen in de array. de array doorloopt en de fruitsoorten toont
    $teller = 0;
    for($teller;$teller<$aantalElementen;$teller++){
        echo "$fruit[$teller] <br>";
    }

    //array $fruit uitlezen met een foreach lus/loop
    foreach($fruit as $vrucht){
        echo "$vrucht <br>";
    }
}
?>

</body>
</html>