<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: reg2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Productenpagina</h2>
    <a href="reg2.php?logout=ja">Logout</a>
</body>

</html>