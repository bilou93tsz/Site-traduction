<?php
/*
Connectez-vous à votre serveur, et faites un clic-droit sur l'un des fichiers, pour obtenir la figure suivante.

En général, vous devriez avoir un menu « CHMOD » ou « Permissions de fichier » (comme moi).
Cela devrait ouvrir une fenêtre qui ressemble à peu près à la figure suivante.

Octroyer tout les droits : 777 pour que PHP puisse modifier le fichier en question*/

	$fichier = fopen('fichier.txt', 'a+');

	try { $bdd = new PDO('mysql:host=localhost;dbname=wiki_traducteur', 'root', '');
        echo 'Connexion etablie a la base de donnees <br /><br /><br /><br />'; }
        catch(PDOException $dbex) {
            die('Erreur de connexion :' .$dbex -> getMessage()) ; }


	$requete="SELECT pseudo, mail, regdate FROM utilisateurs  ";
	$valeur = $bdd->query($requete);
	while ($donnees = $reponse->fetch()) {
		fputs($fichier, ' $donnes['pseudo']');
		fputs($fichier, ' à pour mail : ');
		fputs($fichier, ' $donnees['mail']');
		fputs($fichier, ' et s\'est inscrit le : ');
		fputs($fichier, ' $donnees['regdate']');
	}
	$requete->closeCursor(); // Termine le traitement de la requête

	$ligne = fgets($fichier);


	fclose($fichier);

// Ouverture du fichier
<?php



// Rappel sur les options possible d'ouverture
/* r : ouvre le fichier en lecture seule
   r+ : Ouvre le fichier en lecture et en écriture
   a : Ouvre le fichier en écriture seule, créer le fichier s'il n'existe pas, écrit automatiquement en fin de fichier
   a+ : Ouvre le fichier en lecture et écriture Si le fichier & n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera rajouté à la fin. Ecrit automatiquement en fin de fichier
*/








?>

