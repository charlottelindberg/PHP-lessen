

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->

    <?php
    //De php constante __FILE__ levert pad en bestandsnaam opp
    //basename laat het pad vallen en levert bestandsnaam en extentie op
    //argument .php laat de extentie php vallen en levert bestandsnaam op
     
    switch ($bestand){
        case 'index':
            echo '<title>HOME</title>';
            break;
        case 'about':
            echo '<title>ABOUT</title>';
            break;
        case 'menu':
            echo '<title>MENU</title>';
            break;
    }
    ?>

      
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Danny Lemmens">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>