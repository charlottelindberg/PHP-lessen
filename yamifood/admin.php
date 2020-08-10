<?php 
session_start();
if(isset($_SESSION['status'])){
	
	unset($_SESSION['status']);
	
}

$bestand = basename(__FILE__);
require_once('includes/database.inc.php');
if(isset($_POST['lognaam']) && isset($_POST['logpwd']) && isset($_POST['login'])){
	$naam = $_POST['lognaam'];
	$ww = $_POST['logpwd'];
	$loginGegevens = gebruikerOpzoeken($naam, $ww);
	if($loginGegevens=='fout'){
		echo 'Wachtwoord of naam fout';
	}else{
		$boodschap = 'Welkom '.$loginGegevens['naam'];
		$_SESSION['status']=$loginGegevens['status'];
	}
}

//Code om te registreren
//1 Uitlezen wat in het formulier staat
//2 Gegevens bewaren (ww versleuteld) in db status 4 als nog niet geverifieerd

//3 email sturen met bevestigingscode (regverificatie.php?naam=$naam&mail=$email   fout=mail)
//4 klikken op link in mail => verificatie gebeurt: code die meegezonden wordt door te klikken op de link =? versleuteld emailadres in db? Ja = registratie, neen=foutmelding.

if(isset($_POST['regnaam']) && isset($_POST['regpwd']) && isset($_POST['email'])&& isset($_POST['register'])){
	$rnaam = $_POST['regnaam'];
	$rpwd = $_POST['regpwd'];
	$remail = $_POST['email'];
	$hashpwd = password_hash($rpwd, PASSWORD_BCRYPT);
	//echo $rnaam, $hashpwd;
	
	gebruikerToevoegen($rnaam, $hashpwd, $remail);
	require_once('includes/regmail.php');
	verificatiemail($rnaam, $remail);
	

}




include('includes/head.inc.php');
?>

<body>
	<?php include('includes/header.inc.php'); ?>
	
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
                    <h1>Login voor beheer</h1>
                    <form method="post" action="admin.php">
                        <input type="text" name="lognaam" placeholder="Gebruikersnaam" size="30">
                        <input type="password" name="logpwd" size="30">
                        <input type="submit" name="login" value="Inloggen">
                    </form>
				</div>
				<div class="col-lg-12">
					<h1>Nog niet geregistreerd?</h1>
					<h2 style="color:white;">Vul hieronder uw gegevens in</h2>
                    <form method="post" action="admin.php">
                        <input type="text" name="regnaam" placeholder="Gebruikersnaam" size="30">Naam<br>
						<input type="password" name="regpwd" placehoder ="Geef een wachtwoord" size="30">Wachtwoord<br>
						<input type="text" name="email" placeholder="Vul uw email adres in" size="30">E-mail<br>
                        <input type="submit" name="register" value="Registreren">
                    </form>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>