<?php session_start(); ?>

<form action="1.3.1.php" method="get">
    Voer getal in: <input type="text" name="getal">
    <br>
    Hoeveelste getal? <input type="text" name="hoeveelste">
    <br>
    <input type="submit" name="invoer" value="Versturen">
</form>

<?php
// unset($_SESSION['lijstgetallen']);

if (!isset($_SESSION['lijstgetallen'])) {
    $_SESSION['lijstgetallen'] = array();
}
// print_r($_SESSION['lijstgetallen']);

if (isset($_GET['invoer'])) {
    $getal = $_GET['getal'];
    array_push($_SESSION['lijstgetallen'], $getal);
}
print_r($_SESSION['lijstgetallen']);

if (isset($_GET['hoeveelste']) && $_GET['hoeveelste'] > 0) {
    echo 'Het ' . $_GET['hoeveelste'] . ' getal is ' . $_SESSION['lijstgetallen'][$_GET['hoeveelste'] - 1];
}

// unset($_SESSION['lijstgetallen']);
?>