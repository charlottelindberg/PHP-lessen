<?php

class Product
{

    private $naam;
    private $categorie;
    private $prijs;
    public $prijsA;
    public $prijsB;

    function __construct($naam, $cat, $prijs)
    {
        $this->naam = $naam;
        $this->cat = $cat;
        $this->prijs = $prijs;
        $this->prijsA = $this->prijs * 1.25;
        $this->prijsB = $this->prijs * 1.4;
    }

    function verkoopPrijs($type)
    {
        if ($type == 'A') {
            $vkPrijs = $this->prijs * 1.25;
        } elseif ($type == 'B') {
            $vkPrijs = $this->prijs * 1.4;
        } else {
            $vkPrijs = 0;
        }
        return $vkPrijs;
    }
}

$product1 = new Product('stoel', 'meubelen', 100);

echo "De verkoopprijs is " . $product1->prijsB;


// $product->verkoopPrijs('A');
// De prijs voor klant type A = 1332322 EURO


/* schrijf een klasse product.
properties: naam, categorie, prijs.
methode: verkoopprijs bepaald obv type van klant: A of B zijn.
Klant A betaalt prijs * 1.25, type B betaalt prijs * 1.40. */