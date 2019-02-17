<?php 
session_start();
$Identifiant = strtolower($_POST["username"]);//Entree formulaire nom d'utilisateur 
$Password = $_POST["password"];// Entree du Formulaire Mot de passe


// echo "<pre>";
// var_dump($resultat);
// echo "</pre>";
// echo "<pre>";
// var_dump($info);
// echo "</pre>";
// echo $resultat[0];
if ($Identifiant == 'jon' && $Password == 'Call')//verification que l'identifiant et le mot de passe sont bon
{

	$_SESSION['CO'] = 1;
	// $_SESSION['Identifiant']=$Identifiant ;
	// // echo $_SESSION['Identifiant'];
	// $_SESSION['ID']=$info[0];
	// echo $_SESSION['ID'];
	header("location:BackEntreprise/BackEntreprise.php");
	// header("location:test.php");
}
else
{
	header("location:connexion.php");
}
// echo $_SESSION['Identifiant'];

?>