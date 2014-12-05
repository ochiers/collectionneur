<div id="avatar">
	<?php
		if(!isset($_GET['id']) || !file_exists("images/person".$_GET['id'].".png")){
			$var = '<img src="images/person0.png"/>';
		} else {
			$var = '<img src="images/person'.$_GET['id'].'.png"/>';
		}

		echo $var;
    

	include("sql/connect.php");
	$bdd = connexion_db();

	//

    ?>


</div>
<div id="name">
    Jean Jacques
</div>
<div id="info">
   Virus
</div>
