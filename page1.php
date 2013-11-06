<!DOCTYPE html/>
<html>
	<head>
		<meta content=" text/javascript ; charset=UTF-8"/>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src='jquery-1.9.1.js'></script>

 <script type="text/javascript" src='script1.js'></script>
		
 </head>
<body>
	<div id='banniere'>
		<img id='logo' src='wiki-logo.png'/>
		<br/>
		<img id='img' src='img1.jpg'/>
	 </div>
	 <a id='warp' href='page2.php'> Français ==> Latin </a>
	 <div id='act'>
		<textarea rows=3 cols=15></textarea>
		<button id='bt'>
			Traduire
		 </button>
		<div id='trad'>
		 </div>
 </div>
 
 <form method="post" action="cible.php">
<p>
<label for="pseudo"> Votre pseudo :</label>
<input type="text" name="pseudo" required />

<label for="mdp"> Votre mot de passe :</label>
<input type="password" name="mdp" required />

<input type="submit" value="Valider" />


</p>
</form>
 

	 </body>
 </html>
