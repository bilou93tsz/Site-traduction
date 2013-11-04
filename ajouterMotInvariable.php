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



		<h1> Ajouter un mot invariable : </h1>

		<p>

			<form method='post'  action='ajoutMotInv.php'>



			<label> Mot anglais : </label>

			<input type="text" name="motEn" />

			

			<label> Mot français : </label>

			<input type="text" name="motFr" /><br>





			<label>  Nature: </label> <br>

			<input type="radio" name="nature" value="adverbe" checked >Adverbe<br>

			<input type="radio" name="nature" value="preposition" >Préposition<br>

			<input type="radio" name="nature" value="conjonction" >Conjonction<br>

			<input type="submit" class="boutton" id="bout" value="Valider" />

			<input type="submit" class="boutton" value="Annuler" />

			</form>

	       </p>

	</div>
