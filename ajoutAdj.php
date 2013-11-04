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

	if(!empty($_POST['adjFemPl']) and !empty($_POST['adjFemSg']) and !empty($_POST['adjMasculinPl']) and !empty($_POST['adjMasculinSg']) and!empty($_POST['traduction'])){
		
	try { 
			$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', '');
	       		echo 'Connexion établie'; }
		
		catch(PDOException $dbex) {
		   
			die('Erreur de connexion :' .$dbex -> getMessage()) ; }

	       




		$insert = " CREATE TABLE IF NOT EXISTS adjectif (
	  feminin_sg varchar(200) NOT NULL,
	  feminin_pl varchar(200) NOT NULL,
	  masculin_sg varchar(200) NOT NULL,
	  masculin_pl varchar(200) NOT NULL,
	  traduction varchar(200) NOT NULL
	  )";
		$insert1 = "INSERT INTO adjectif values ('$_POST[adjFemSg]', '$_POST[adjFemPl]', '$_POST[adjMasculinSg]', '$_POST[adjMasculinPl]', '$_POST[traduction]')";
		$requete = $bdd ->exec($insert);
		$requete2 = $bdd ->exec($insert1);

	}
	else { echo " Veuillez remplir tous les champs ! " }
?>

</p>
</body>
