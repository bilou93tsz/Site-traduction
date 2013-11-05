<?php

session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta content=" text/javascript ; charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="page1.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src='jquery-1.9.1.js'></script>

	<script type="text/javascript" src='script1.js'></script>
		
	<title> Page en etant connecte - Site Wiki Traducteur </title>

    </head>
<body>


<h1> Test des valeurs entrees dans le formulaire </h1>
<?php
// Nous allons vérifié toutes les données entrées dans le formulaire

function taille_variable($variable,$taille_min=0,$taille_max=0)
{
	global $_POST;
	if(!isset($_POST[$variable])){ /*valeur non définie */ return false;}
	elseif ( strlen($_POST[$variable])<$taille_min){ return False; }
	elseif ( strlen($_POST[$variable])>$taille_max){ return FALSE; }
	return True;
}


if (strlen($_POST['numero_telephone']<>0)) {
	if(!taille_variable('numero_telephone',10,10)){
		echo ' Le numero de telephone doit faire 10 caracteres';
		echo '<br />';
	}
}


elseif(!taille_variable('pseudo',2,20)){
	echo 'Login invalide, rentrez minimum 2 caracteres et au maximum 20 caracteres';
	echo '<br />';
}

elseif(!taille_variable('pass',5,40)){
	echo 'Mot de passe invalide, rentrez minimum 5 caracteres et au maximum 40 caracteres';
	echo '<br />';
}

elseif($_POST['pass'] != $_POST['pass2'] ){
	echo 'Mot de passe different lors de la seconde saisie';
	echo '<br />';
}

echo '<p> Les valeurs entrees dans le formulaire sont correctes on va maintenant passer a l\'insertion dans la base de donnees </p>' ;


/*list($user,$dns)=explode("@",$_POST['e-mail']) // cettefonction n'est pas normalement utilisable sous windows
if(!checkdnsrr($dns)){
	echo 'l\'adresse mail n\'est pas valide';
}*/


$correct=true;
if($correct) {
	$mail= $_POST["mail"] ;
	$pseudo = $_POST["pseudo"] ;
	$password = $_POST["pass"] ;
	$password2 = $_POST["pass2"] ;
	$age = $_POST["age"] ;
	$page_perso = $_POST["page_perso"] ;
	$numero_telephone = $_POST["numero_telephone"] ;
	$regdate=date('Ymd');

	echo '<br />';

	echo '<br /><br />';

// on ouvre la table
	try { $bdd = new PDO('mysql:host=localhost;dbname=wiki_traducteur', 'root', '');
        echo 'Connexion etablie a la base de donnees <br /><br /><br /><br />'; }
        catch(PDOException $dbex) {
            die('Erreur de connexion :' .$dbex -> getMessage()) ; }

	$requete="SELECT Pseudo FROM utilisateurs WHERE Pseudo='$pseudo' ";
	$valeur = $bdd -> query($requete);
	if ( mysql_affected_rows()<>0) {
		echo ' Ce pseudo existe deja veuillez en entrer un autre. ';
		//retour en arrière
	}
	else {

		$requete="SELECT E-mail FROM utilisateurs WHERE E-mail='$mail'";
		$valeur= $bdd -> query($requete);
		if ( mysql_affected_rows()<>0) {
			echo ' Cet adresse mail existe deja';
			//procédure pour récupérer le mot de passe
		} else {
			//nom d'utilisateur et adresse mail inconnue, on peut rentrer l'utilisateur
			echo 'On ajoute l\'utilisateur';



			$req = $bdd->prepare('INSERT INTO jeux_video(pseudo, password, age, mail, numero_telephone, page_perso, regdate) VALUES(:pseudo, :password, :age, :mail, :numero_telephone, :page_perso, :regdate)');
			$req->execute(array(
    					'pseudo' => $pseudo,
    					'password' => $password,
    					'age' => $age,
    					'mail' => $mail,
    					'numero_telephone' => $numero_telephone,
   					'page_perso' => $page_perso,
    					'regdate' => $regdate
   			 ));
			$req -> errorInfo();
			$req -> closeCursor() ;
		}
	}
	$bdd=null;
}
?>



</body>

</html>

