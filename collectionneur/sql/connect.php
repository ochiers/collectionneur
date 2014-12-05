<?php

	function connexion_db()
	{
		// informations pour accéder à la base de données
		$host = "localhost";
		$user = "root";
		$password = "";
		$nombase = "collectionneur";
		
		//connection
		try
		{
			$bdd = new PDO('mysql:host='.$host.';dbname='.$nombase, $user, $password);

		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		return $bdd;
	}

?>