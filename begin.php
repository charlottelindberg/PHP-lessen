<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="begin.php" method="get">
        <input type="text" name="invoer" id="invoerveld" class="invoer-1">
        <input type="submit" name="knop" value="Versturen">
    </form>

    <?php
    if (isset($_GET['knop'])) {
        if (isset($_GET['invoer'])) {
            $naam = $_GET['invoer'];
            header("Location: eind.php?naam=$naam");
        }
    }
    ?>

</body>
</html>