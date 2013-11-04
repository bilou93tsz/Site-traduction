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

	<div id='ajout'>

		<h1> Ajouter un mot : </h1>
		<p>
			<form method='post'  action='ajoutM.php'>

			<label> Mot français singulier: </label>
			<input type="text" name="motFrSg" />

			<label> Mot français pluriel: </label>
			<input type="text" name="motFrPl" />

			<label> Mot anglais singulier: </label>
			<input type="text" name="motEnSg" />

			<label> Mot anglais pluriel: </label>
			<input type="text" name="motEnPl" /> <br>

			
			<label >Genre : </label>
			<input type="radio" name="genre" /> <label >Féminin</label>
			<input type="radio" name="genre" /> <label >Masculin</label> <br>

			<input type='submit' class='boutton' id='bout' value='Valider' />
			<input type='submit' class='boutton' value='Annuler' />
			</form>
	       </p>
	</div>
</body>
