<div id="avatar">
    <?php
		if(!isset($_GET['id']) || !file_exists("images/person".$_GET['id'].".png")){
			$var = '<img src="images/item0.png"/>';
		} else {
			$var = '<img src="images/item'.$_GET['id'].'.png"/>';
		

		
		echo $var;
    ?>
</div>
<div id="name">
    Virus
</div>

<?php

	$idItem = (int)htmlspecialchars($_GET['id']);

	include("sql/connect.php");
	$bdd = connexion_db();

	//Récupération de la description des items

	$requete = $bdd->prepare('SELECT * FROM Item WHERE IdItem = ?');
	$requete->execute(array($idItem)) or die (print_r($requete->errorInfo()));

	$InfoItem = $requete->fetch(PDO::FETCH_ASSOC);

	echo '<div id="intro">';
	echo '<table>';
	echo '<tr>';
	echo '<td>Item :'.$InfoItem['IdItem'].'</td>';
	echo '<td>Nom :'.$InfoItem['NomItem'].'</td>';
	echo '</tr>';
	echo '<tr><td>Description :'.$InfoItem['Description'].'</td></tr>';


	}
?>
