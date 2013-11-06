

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta content=" text/javascript ; charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="page1.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src='jquery-1.9.1.js'></script>

	<script type="text/javascript" src='script1.js'></script>
		
	<title> Page traitement connexion - Site Wiki Traducteur </title>

    </head>
<body>


<h1> Test des valeurs de connexion du formulaire </h1>
<?php
// Nous allons vérifié toutes les données entrées dans le formulaire

$pseudo = $_POST["pseudo"] ;
$password = $_POST["mdp"] ;

// on ouvre la table
	try { $bdd = new PDO('mysql:host=localhost;dbname=wiki_traducteur', 'root', '');
        echo 'Connexion etablie a la base de donnees <br /><br /><br /><br />'; }
        catch(PDOException $dbex) {
            die('Erreur de connexion :' .$dbex -> getMessage()) ; }

$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
	'pseudo' => $pseudo,
	'pass' => $pass));

$resultat = $req->fetch();

if(!$resultat) { echo ' Mauvais pseudo ou mot de passe !' ; }
else { session_start();
	$_SESSION['id'] = $resultat['id'];
	$_SESSION['pseudo'] = $pseudo;
	echo 'Vous êtes connecté !';
}


/* rajouter le code suivant dans toute les pages
<?php
if ( isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	echo ' Tu es connecté ' . $_SESSION['pseudo'];
} 
*/

?>

</body>

</html>
