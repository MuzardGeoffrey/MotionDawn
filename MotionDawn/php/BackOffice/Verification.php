<?php 
session_start();
$Identifiant = strtolower($_POST["username"]);//Entree formulaire nom d'utilisateur 
$Password = $_POST["password"];// Entree du Formulaire Mot de passe

if (($handle = fopen("Identifiant.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ';')) {

		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";

		if ($Identifiant === $data[1] && $Password === $data[2])//verification que l'identifiant et le mot de passe sont bon
		{

			$_SESSION['CO'] = 1;//initialise la session pour le bake office
			header("location:BackEntreprise/BackEntreprise.php");
			// echo "reussite";
		}
		else
		{
			header("location:index.php");
			// echo "lose";
		}
	}
}
?>