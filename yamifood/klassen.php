<?php

class Gebruiker
{
    // properties
    public $naam;
    public $voornaam;
    // private $naam;
    // private $voornaam;

    //method
    function aanmaken($vm, $nm)
    {
        $this->voornaam = $vm;
        $this->naam = $nm;
    }

    function volledigeNaam()
    {
        $volNaam = $this->voornaam . " " . $this->naam;
        echo $volNaam;
        echo "<br>";
        // return $volNaam;
    }
}

$user1 = new Gebruiker;
$user1->voornaam = 'Diana';
$user1->naam = 'Walker';
$user1->volledigeNaam();

$user2 = new Gebruiker;
$user2->voornaam = 'Chris';
$user2->naam = 'Walker, AKA The Phantom';
$user2->volledigeNaam();

$user3 = new Gebruiker;
$user3->aanmaken('Kit', ' Walker');
$user3->volledigeNaam();

$user4 = new Gebruiker;
$user4->aanmaken('Heloise', ' Walker');
$user4->volledigeNaam();