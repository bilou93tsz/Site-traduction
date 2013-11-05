<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Ajouter une regle</title>

<link href="ajouterregles.css" rel="stylesheet" type="text/css" />

</head>

<body>

<h2>Ajouter une regle en Francais et une en Anglais</h2>



<div id='banniere'>

                <img id='logo' src='Wiki_logo.png'/>

</div>



<form method='get' action='ajouterregles.php'>

	<p><label>Le numero de la regle  </label><input type = "text" name = "num" /></p>

	<p><label>Regle en Francais  </label><input type = "text" name = "regle1" /></p>

	<p><label>Regle en Anglais  </label><input type = "text" name = "regle2" /></p>

	<p><input type ="submit" value="envoyer">

</form>

<?php


if( isset($_GET['num'])   &&    isset($_GET['regle1'])  && isset($_GET['regle2']))

{



	$numero = $_GET['num'];

	$rgl1 = $_GET['regle1'];

	$rgl2 = $_GET['regle2'];

	

	try { $bdd = new PDO('mysql:host=localhost;dbname=grammaire', 'root', '');

       		 echo 'Connexion etablie a la base de donnees <br /><br /><br /><br />'; }

        catch(PDOException $dbex) {

            die('Erreur de connexion :' .$dbex -> getMessage()) ; }





	$bdd->exec("INSERT INTO Regle(numero,regleFR, regleEN) VALUES($numero, $rgl1 ,$rgl2)");





}

?>





</body>

</html>

