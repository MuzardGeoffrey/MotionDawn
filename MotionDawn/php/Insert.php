<?php
if ($_POST['prenom'] == false) {
	$list = ['Nom' => $_POST['nom'], 'Email' => $_POST['mail'], 'Objet' => $_POST['objet'], 'Information' => $_POST['information']];
}
else{
$list = ['Nom' => $_POST['nom'], 'Prenom' => $_POST['prenom'], 'Adresse' => $_POST['adresse'], 'Code' => $_POST['code'], 'Ville' => $_POST['ville'], 'Email' => $_POST['email'], 'Telephone' => $_POST['telephone'], 'Date' => $_POST['date'], 'Objet' => $_POST['objet'], 'AdresseEvenement' => $_POST['adresseEvenement'], 'Information' => $_POST['information']];
}
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen('BD.csv','a');//
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list);
fclose($fp);
 ?>