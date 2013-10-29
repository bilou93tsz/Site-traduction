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

   	

	<div id='ajoutVerbe'>

	<h1> Ajouter un verbe : </h1>

	<form method='post'  action='ajoutV.php'>

	

	

	<p>	<label> Verbe français: </label>

                

	   		 <input type="text" name="verbeFrancais" />

	

	

		<label> Verbe anglais: </label>

		        

		   	 <input type="text" name="verbeAnglais" />

	

	<br>



		<label> Modèle français: </label>

			<input type="radio" name="groupe1" class="groupe" /> <label >1er groupe</label>

			<input type="radio" name="groupe2" class="groupe" /> <label >2e groupe</label>

			<input type="radio" name="groupe3" class="groupe" /> <label >3e groupe</label>





	<br>

		<label> Modèle anglais: </label>

			<input type="radio" name="groupeReg" class="groupe" /> <label >régulier</label>

			<input type="radio" name="groupeIrr" class="groupe" /> <label >irrégulier</label>

			



	<br>



		 <input type="submit" class="boutton" id="bout" value="Valider" />

		<input type="submit" class="boutton" value="Annuler" />

	</p>

	

</form>

</div>

</body>
