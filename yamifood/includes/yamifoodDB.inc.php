<?php
$verbinding = mysqli_connect('localhost','root','','yamifood') or die('foutje bij verbinden met de database');
                
//functie die de beschikbare gerechten toont.
//genereert voor elk actief gerecht in de db een kaart op de webpagina.
        function gerechtenlijst(){
                $vraag = "SELECT * FROM gerechten WHERE actief = 1;";
                global $verbinding;
				$antwoord = mysqli_query($verbinding, $vraag);
				while($rij = mysqli_fetch_row($antwoord)){
					$categorie = $rij[1];
					$titel = $rij[2];
					$afbeelding = $rij[3];
					$beschrijving = $rij[4];
                    $prijs = $rij[6];
                    echo '
                    <div class="col-lg-4 col-md-6 special-grid '.$categorie.'">
                        <div class="gallery-single fix">
                            <img src="images/'.$afbeelding.'" class="img-fluid" alt="Image">
                            <div class="why-text">
                                <h4>'.$titel.'</h4>
                                <p>'.$beschrijving.'</p>
                                <h5> &euro;'.$prijs.'</h5>
                            </div>
                        </div>
                    </div>';
                }
        }
                    
?>