<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels van vermenigvuldiging</title>
</head>

<body>

    <!-- Een invoerveld en een knop
    Genereer obv dit getal een tabel voor de tafel van vermenigvuldiging -->

    <form method="POST" action="tafels.php">
            <label>Type een nummer:</label>
            <input type="number" class="form-control" min="0" max="10" name="digit" required="required" />
            <button name="calculate">Bereken</button>
    </form>
    <br /><br />
    <?php
    if (isset($_POST['calculate'])) {
    ?>
        <table>
            <?php

            for ($i = 1; $i <= $_POST['digit']; $i++) {
                echo "<tr>";

                for ($j = 1; $j <= 10; $j++) {

                    echo "<td>" . $i * $j . "</td>";
                }

                echo "</tr>";
            }

            ?>
        </table>
    <?php
    }
    ?>

</body>

</html>