<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Ajouter une regle</title>

</head>

<body>

<h1>Ajouter une régle en Français et en Anglais</h1>



<form method='post' action='ajouterregle.php'>
<p><label>Le numero de la regle</label><input type = "text" name = "num" /></p>

<p><label>Regle en Français</label><input type = "text" name = "regle1" /></p>

<p><label>Regle en Anglais</label><input type = "text" name = "regle2" /></p>

<p><input type ="submit" value="envoyer">

</form>

// COMPLETER $cnx QUAND URL SERA DEFINI

<?php

if($_POST['num']!='' && $_POST['regle1']!='' && $_POST['regle2']!='')
{
	try{
		$cnx = new PDO('mysql:host=xxx ; dbname=xxx' 'xxx' 'xxx');
		echo 'Connexion etablie';
	}
	catch(PDOException $dbex){
		die('Erreur de connexion:'.$dbex->getMessage());
	}

	$numero = (int)$_POST['num'];

	$insert = "INSERT INTO Regle($numero , $_POST['regle1'] , $_POST['regle2'])";
	$requete = $cnx->exec(insert);

}

?>





</body>

</html>
