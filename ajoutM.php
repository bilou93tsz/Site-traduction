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

if (!empty($_POST['motFrPl']) and !empty($_POST['motFrSg']) and !empty($_POST['motFrPl']) and !empty($_POST['motFrSg']) and ($_POST['genre']== true)){
        
	try { 
		$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', '');
       		echo 'Connexion établie'; }
        
	catch(PDOException $dbex) {
           
		die('Erreur de connexion :' .$dbex -> getMessage()) ; }

       




	$insert = "CREATE TABLE IF NOT EXISTS 'nom' (
  'nom' varchar(200) NOT NULL,
  'pluriel' varchar(200) NOT NULL
  'traductionSg' varchar(200) NOT NULL,
  'traductionPl' varchar(200) NOT NULL,
  'genre' varchar(200) NOT NULL,
  
)";
        $insert1 = "INSERT INTO mot values ('$_POST[motFrSg]', '$_POST[motFrPl]', '$_POST[motEnSg]', '$_POST[motEnPl]', '$_POST[genre]')";
        $requete = $bdd ->exec($insert);
	$requete2 = $bdd ->exec($insert1);

}
else { echo " Veuillez remplir tous les champs ! "; }
?>

</p>
</body>
