<!DOCTYPE html>
<html>
        <head>
               
		<meta http-equiv="content-type" content="text/html" charset="utf-8" /> 
                <link href="style.css" type="text/css" rel="stylesheet"/>
		<link rel="shortcut icon" href="images/wiki-logo.ico">
                <script type="text/javascript" src='jquery-1.9.1.js'></script>
		<script type="text/javascript" src='script.js'></script>
		<title> Traducteur </title>
	</head>
 
	<body>

        	<div id='banniere'>
                	<a href='accueil.php'><img id='img' src='images/img1.jpg'/></a>
        	</div>
<p>

<?php

	if ($_POST['nature']= 'adverbe'){
		
		try { 
			$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', '');
	       		echo 'Connexion établie'; }
		
		catch(PDOException $dbex) {
		   
			die('Erreur de connexion :' .$dbex -> getMessage()) ; }

	       


		$insert = "CREATE TABLE IF NOT EXISTS 'adverbe' (
	  'adverbe' varchar(200) NOT NULL,
	  'traduction' varchar(200) NOT NULL)";

		$insert1 = "INSERT INTO mots.adverbe values ('$_POST[motFr]', '$_POST[motEn]')";
		$requete = $bdd ->exec($insert);
		$requete2 = $bdd ->exec($insert1);

	}
	elseif ($_POST['nature']= 'preposition'){
		
		try { 
			$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', '');
	       		echo 'Connexion établie'; }
		
		catch(PDOException $dbex) {
		   
			die('Erreur de connexion :' .$dbex -> getMessage()) ; }

	       


		$insert = "CREATE TABLE IF NOT EXISTS 'preposition' (
	  'preposition' varchar(200) NOT NULL,
	  'traduction' varchar(200) NOT NULL)";

		$insert1 = "INSERT INTO mots.preposition values ('$_POST[motFr]', '$_POST[motEn]')";
		$requete = $bdd ->exec($insert);
		$requete2 = $bdd ->exec($insert1);

	}
	elseif ($_POST['nature']= 'conjonction'){
		
		try { 
			$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', '');
	       		echo 'Connexion établie'; }
		
		catch(PDOException $dbex) {
		   
			die('Erreur de connexion :' .$dbex -> getMessage()) ; }

	       


		$insert = "CREATE TABLE IF NOT EXISTS 'conjonction' (
	  'conjonction' varchar(200) NOT NULL,
	  'traduction' varchar(200) NOT NULL)";

		$insert1 = "INSERT INTO mots.conjonction values ('$_POST[motFr]', '$_POST[motEn]')";
		$requete = $bdd ->exec($insert);
		$requete2 = $bdd ->exec($insert1);

	}

?>

</p>
</body>
