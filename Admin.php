<?php
	session_start();
	include('entete.php');
	
	try { $bdd = new PDO('mysql:host=localhost;dbname=wiki_traducteur', 'root', '');
        echo 'Connexion etablie a la base de donnees <br /><br /><br /><br />'; }
        catch(PDOException $dbex) {
            die('Erreur de connexion :' .$dbex -> getMessage()) ; }
	$reponse = $bdd->query('SELECT pseudo FROM utilisateur');
	while ($nom = $reponse->fetch()){
		if (isset($_POST[$nom])){
			$var=$_POST[$nom];
			if ($var==0){
				$bdd->query('DELETE FROM Utilisateurs WHERE login='.$nom);
			}
			$bdd->query('UPDATE Utilisateurs SET droit='.$var.' WHERE login='.$nom);
		} 	
	}
	$reponse->closeCursor();
?>
	<div id="Connexion" class='admin'>
		<span> Salut </span><br/>
		<span> Admin </span>
	</div>

	<div id='admin'>
		<h2 style="texte-decoration:underline;">Gérer Utilisateurs :</h2>
		<div id='user' style="border:1px solid;height:150px;width:500px;overflow:auto;">
<?php		$reponse = $bdd->query('SELECT login FROM Utilisateurs');
?>
			<form action="Admin.php" method="post">
<?php while ($nom = $reponse->fetch()){
		echo"<span class='user'>".$nom."</span>
		<input type='radio' name='".$nom."' value=2 /><label>Membre Grammaire </label>
		<input type='radio' name='".$nom."' value=3 /><label>Membre Mot </label>
		<input type='radio' name='".$nom."' value=0 /><label>Supprimer </label>
		<hr/>";	
		}
		$reponse->closeCursor();
?>
					
			</form>
		</div>
		<h2 style="texte-decoration:underline;">Gérer Règles :</h2>
		
		<div id='grammaire'style="border:1px solid;height:150px;width:500px;overflow:auto;">
<?php	$reponse = $bdd->query('SELECT regleFR,regleEN FROM Regle');
?>
        <form action="Admin.php" method="post">
        
			</form>
		</div>
		
		<h2 style="texte-decoration:underline;">Gérer Mots :</h2>
        <form action="Admin.php" method="post">
			</form>
			
		</div>
	</div>
<?php
	include('fin.html');
?>
