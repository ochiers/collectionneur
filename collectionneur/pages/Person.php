<div id="avatar">
	<?php
		if(!isset($_GET['id']) || !file_exists("images/person".$_GET['id'].".png")){
			$var = '<img src="images/person0.png"/>';
		} else {
			$var = '<img src="images/person'.$_GET['id'].'.png"/>';
		

		echo $var;
    ?>
</div>
<div id="name">
    Jean Jacques
</div>
 <?php

	$idPerson = (int)htmlspecialchars($_GET['id']);


	include("sql/connect.php");
	$bdd = connexion_db();

	//Récupération des tous les items de la personne $idPerson
	$requete = $bdd->prepare('SELECT * FROM Person WHERE IdPerson = ?');
	$requete->execute(array($idPerson)) or die (print_r($requete->errorInfo()));

	$ligneItem = $requete->fetch(PDO::FETCH_ASSOC);

	echo '<div id="intro">';
	echo '<table>';
	
	$i=1;
	do
	{
		echo '<tr>';

			echo '<td>Item '.$i.'</td>';
			echo '<td>'.$ligneItem['IdItem'].'</td>';

		echo '</tr>';
		$i = $i +1;
	} while($ligneItem=$requete->fetch(PDO::FETCH_ASSOC));

	echo '</table>';
	echo '</div>';
	
	}

	?>