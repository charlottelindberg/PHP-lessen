<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 16</title>
</head>

<body>

    <form method='get' action="16.php">
        Geef getal op voor faculteit berekening: <input type="number" name="getal">
        <input type="submit" name="knop" value="FACULTEIT">
    </form>

    <?php
    // vraag getal op, bv 6
    if (isset($_GET['getal'])) {
        // if isset wordt gebruikt om de foutmelding te verbergen, de berekening hier beneden werkt zowiezo

        $num = $_GET['getal'];
        // voorzie een variable om het resultaat van de vermengvuldinging te bewaren
        $product = 1;
        // vermenigvuldig getal met getal dat 1 minder is, en doe dit tot je aan 1 komt
        // 5=> 5*4=20, 20*3=60, 60*2=120, 120*1=120
        while ($num > 0) {
            $product = $product * $num;
            $num--;
        }
        echo $product;
    }


    // array: 2 soorten
    // indexen = getal array[0], array[1]
    // indexen = woorden (keys) array['naam']='Jania'
    // array('naam'=>'Danny', 'postcode'=2040)

    ?>

</body>

</html>