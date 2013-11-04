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



		<h1> Ajouter un adjectif : </h1>

		<p>

			<form method='post'  action='ajoutAdj.php'>



			<label> Adjectif anglais: </label>

			<input type="text" name="traduction" />

			

			<label> Adjectif masculin singulier: </label>

			<input type="text" name="adjMasculinSg" />





			<label>  Adjectif masculin pluriel: </label>

			<input type="text" name="adjMasculinPl" />



			<label> Adjectif féminin singulier: </label>

			<input type="text" name="adjFemSg" />



			<label>  Adjectif féminin pluriel:</label>

			<input type="text" name="adjFemPl" />

			

			<input type="submit" class="boutton" id="bout" value="Valider" />

			<input type="submit" class="boutton" value="Annuler" />

			</form>

	       </p>

	</div>
