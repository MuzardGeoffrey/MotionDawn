<?php
$i = 1;
$list[] = "decalage";
while (isset($_POST['formulaire'.$i]))  {
echo "<pre>";
	var_dump($_POST['formulaire'.$i]);
echo "<pre>";
echo "<pre>";
	var_dump($_FILES['formulaire'.$i]);
echo "<pre>";
	if (isset($_FILES['formulaire'.$i])){
		$Image = array($_FILES['formulaire'.$i]);
		$list[] = "../img/".$_FILES['formulaire'.$i]['name'];
		move_uploaded_file($_FILES['formulaire'.$i]['tmp_name'], "../img/".$_FILES['formulaire'.$i]['name']);
		echo "image charger";
	}else{
		$list[] = $_POST['formulaire'.$i];
	}
	$i++;
}
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen('Inauguration.csv','w');
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,';');
fclose($fp);
// header("location:BackInauguration.php");
?>
