<div id="avatar">
    <?php
		if(!isset($_GET['id'])){
			$var = '<img src="images/person0.png"/>';
		} else {
			$var = '<img src="images/person'.$_GET['id'].'.png"/>';
		}

		
		echo $var;
    ?>
</div>
<div id="name">
    Groupes
</div>
<div id="info">
   Virus
</div>
