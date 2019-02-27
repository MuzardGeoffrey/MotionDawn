<?php
$i = 1;
$list = ["Decalage"];
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen('Inauguration.csv','w');
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,';');
fclose($fp);
while (isset($_POST['formulaire'.$i]))  {
	echo "<pre>";
		var_dump($_POST['formulaire'.$i]);
	echo "<pre>";
	echo "<pre>";
		var_dump($_FILES['formulaire'.$i]['name']);
	echo "<pre>";
	echo "<pre>";
		var_dump($_FILES['formulaire'.$i]['tmp_name']);
	echo "<pre>";

	if (isset($_FILES['formulaire'.$i])){
		$Image = array($_FILES['formulaire'.$i]);
		$list = ["../img/".$_FILES['formulaire'.$i]['name']];
		move_uploaded_file($_FILES['formulaire'.$i]['tmp_name'], "../img/".$_FILES['formulaire'.$i]['name']);
		echo "image charger";

		$fp = fopen('Inauguration.csv','a');
		fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
		fputcsv($fp,$list,';');
		fclose($fp);

	}elseif (isset($_POST['formulaire'.$i])) {
		$list = [$_POST['formulaire'.$i]];

		$fp = fopen('Inauguration.csv','a');
		fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
		fputcsv($fp,$list,';');
		fclose($fp);
		
	}else{

	}
	$i++;
	echo "<pre>";
	var_dump($list);
	echo "<pre>";
}

header("location:BackInauguration.php");
?>
