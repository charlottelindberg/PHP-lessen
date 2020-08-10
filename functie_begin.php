<?php
// global $pi;
$pi = 3.1415;

function welcome($naam, $fnaam)
{
    echo "Welkom $naam $fnaam";
}

function optellen($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
}

function omtrek($straal)
{
    global $pi;
    $omtrek = 2 * $straal * $pi;
    return $omtrek;
}

$teller = 0;
function tellen($nummer)
{
    global $teller;
    $teller += $nummer;
    return $teller;
}

welcome('Charlotte ', 'Lindberg');
echo "<br>";

echo optellen(10, 5);
echo "<br>";

echo omtrek(2);
echo "<br>";

echo tellen(1);
echo "<br>";
echo tellen(1);
echo "<br>";
echo tellen(1);
echo "<br>";
