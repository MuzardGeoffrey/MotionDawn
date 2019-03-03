<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta name="keywords" lang="fr" content="html,php,css">
        <meta name="author" lang="fr" content="Muzard Geoffrey">
        <!--  IMPORT .CSS       -->
        <link href="css/responsive.css" rel="stylesheet">
        <!--  IMPORT FONTS      -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<title>
		BackOffice
	</title>
</head>
<body>
    <bloc>
        <?php 
        session_start();
            if ($_SESSION['CO'] != 1){
                header('Location:../index.php');//renvoie vers la page de connexion si la personne n'est pas identifier
            } 
        ?>