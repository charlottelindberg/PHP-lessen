<?php
//properties naam, voornaam, Methods: getNaam, setUser(nm, vn)
class Gebruiker
{
    //properties
    public $naam;
    public $email;
    public $id;
    //method
    function __construct($nm = "", $mail = "")
    {
        $this->naam = $nm;
        $this->email = $mail;
    }
    //Zoek op basis van id en ken mail, id en naam toe aan de properties
    function gebruikerOpzoeken($id)
    {
        $db = mysqli_connect('localhost', 'root', '', 'yamifood') or die("Foutje");
        $query = "SELECT * FROM gebruikers WHERE id = $id;";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) > 0) {
            $this->id = $id;
            $rij = mysqli_fetch_assoc($result);
            $this->naam = $rij['naam'];
            $this->email = $rij['email'];
        }
        mysqli_close($db);
        return array($this->id, $this->naam, $this->email);
    }
}
//met constructor
$user1 = new Gebruiker();
$gebruikersGegevens = $user1->gebruikerOpzoeken(3);
echo $gebruikersGegevens[2];
echo $user1->naam;


/*zonder constructor
$user1 = new Gebruiker;
$user2 = new Gebruiker;
$user1->setUser('Lemmens','Danny');
$user1->volledigeNaam();
echo $user1->getNaam();
*/