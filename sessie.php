<?php session_start(); ?>

<form action="sessie.php" method="get">
    <input type="text" name="invoer" id="invoerveld" class="invoer-1">
    <input type="submit" name="knop" value="Versturen">
</form>

<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo '<form action="sessie.php" method="post">
<input type="submit" name="knop" value="Logout">
</form>';
}
?>

<?php
// bestaat de naam al in de sessie variable
// zo ja, toon de naam
if (isset($_SESSION['naam'])) {
    echo 'Welkom ' . $_SESSION['naam'] . '<br>';
    $_SESSION['login'] = true;
    echo '<a href="sessie2.php">Ga naar volgende pagina</a>';
    // zo neen, kijk of er een naam is ingevoerd
} else {
    if (isset($_GET['invoer']) && $_GET['invoer'] <> '') {
        $_SESSION['naam'] = $_GET['invoer'];
        $_SESSION['login'] = true;
        echo 'Welkom ' . $_SESSION['naam'] . '<br>';
    }
}
if (isset($_POST['knop'])) {
    $_SESSION['login'] = false;
    unset($_SESSION['naam']);
}
?>