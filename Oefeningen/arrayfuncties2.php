<?php
$lijst = array('Charlotte', 'Laura', 'Sandy', 'Bella', 'Jenna');

// elementen toevoegen aan het lijst, op een bepaalde indexpositie (overschreven)
$lijst[4] = 'Hannah';
$lijst[3] = 'Jenna';
$lijst[10] = 'Laetitia';

// voeg aan het einde van de array een element toe (schrijft niet huidige elementen over)
array_push($lijst, 'Karin');

// element toevoegen aan begin van de array (schrijft niet huidige elementen over)
array_unshift($lijst, 'Tina');

// element weghalen uit lijst vooraan, returnwaarde is het verwijderde element
$verwWaarde = array_shift($lijst);
echo $verwWaarde . ' is verdwenen uit lijst vooraan';

// element weghalen uit lijst achteraan
$verwWaarde = array_pop($lijst);
echo $verwWaarde . ' is verdwenen uit lijst achteraan';

print_r($lijst);
