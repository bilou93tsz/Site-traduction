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

<p>



<?php









if(!empty($_POST['vbfranc1'])){



        try { 

		$bdd = new PDO('mysql:host=localhost;dbname=mots','root','');

       		  

		echo 'Connexion établie.'; 

	}

        

	catch(PDOException $dbex) {

           

		die('Erreur de connexion :' .$dbex -> getMessage()) ; }



         $vbFr1 = $_POST['vbfranc1'];

	 $vbFr2 = $_POST['vbfranc2'];

	 $vbFr3 = $_POST['vbfranc3'];

	 $vbFr4 = $_POST['vbfranc4'];

	 $vbFr5 = $_POST['vbfranc5'];

	 $vbFr6 = $_POST['vbfranc6'];

	 $vbFr7 = $_POST['vbfranc7'];

 	 $vbFr8 = $_POST['vbfranc8'];

	 $vbFr9 = $_POST['vbfranc9'];

	 $vbFr10 = $_POST['vbfranc10'];

	 $vbFr11 = $_POST['vbfranc11'];

	 $vbFr12 = $_POST['vbfranc12'];

	 $vbFr13 = $_POST['vbfranc13'];	

	 $vbFr14 = $_POST['vbfranc14'];

	 $vbFr15 = $_POST['vbfranc15'];

	 $vbFr16 = $_POST['vbfranc16'];

	 $vbFr17 = $_POST['vbfranc17'];

	 $vbFr18 = $_POST['vbfranc18'];





	$insert = "CREATE TABLE IF NOT EXISTS verbe (

  infinitif varchar(200) NOT NULL,

  traduction varchar(200) NOT NULL,

  temps varchar(200) NOT NULL,

  1erePers varchar(200) NOT NULL,

  2ePers varchar(200) NOT NULL,

  3ePers varchar(200) NOT NULL,

  4ePers varchar(200) NOT NULL,

  5ePers varchar(200) NOT NULL,

  6ePers varchar(200) NOT NULL

)";



	$insert1 = "INSERT INTO mots.verbe values('$_POST[infinitif]', '$_POST[traduction]', 'present', '$vbFr1','$vbFr2', '$vbFr3', '$vbFr4', '$vbFr5', '$vbFr6' )";

	$insert2 = "INSERT INTO mots.verbe values('$_POST[infinitif]', '$_POST[traduction]', 'imparfait', '$vbFr7', '$vbFr8', '$vbFr9', '$vbFr10', '$vbFr11', '$vbFr12' )";

	$insert3 = "INSERT INTO mots.verbe values('$_POST[infinitif]', '$_POST[traduction]', 'futur', '$vbFr13', '$vbFr14', '$vbFr15', '$vbFr16', '$vbFr17', '$vbFr18' )";        

	

	$requete = $bdd->exec($insert);

	$requete1 = $bdd->exec($insert1);

	$requete2 = $bdd->exec($insert2);

	$requete3 = $bdd->exec($insert3);

	 echo "<br> L'ajout s'est effectué avec succès. Merci de votre participation.";

	

}



elseif(!empty($_POST['vbEn1'])) {



        try { 

		$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', '');

       		  

		echo 'Connexion établie'; 

	}

        

	catch(PDOException $dbex) {

           

		die('Erreur de connexion :' .$dbex -> getMessage()) ; }



         $vbEn1 = $_POST['vbEn1'];

	 $vbEn2 = $_POST['vbEn2'];

	 $vbEn3 = $_POST['vbEn3'];

	 $vbEn4 = $_POST['vbEn4'];

	 $vbEn5 = $_POST['vbEn5'];

	 $vbEn6 = $_POST['vbEn6'];

	 $vbEn7 = $_POST['vbEn7'];

 	 $vbEn8 = $_POST['vbEn8'];

	 $vbEn9 = $_POST['vbEn9'];

	 $vbEn10 = $_POST['vbEn10'];

	 $vbEn11 = $_POST['vbEn11'];

	 $vbEn12 = $_POST['vbEn12'];

	





	$insert = "CREATE TABLE IF NOT EXISTS verbe (



  infinitif varchar(200) NOT NULL,

  traduction varchar(200) NOT NULL,

  temps varchar(200) NOT NULL,

  1erePers varchar(200) NOT NULL,

  2ePers varchar(200) NOT NULL,

  3ePers varchar(200) NOT NULL,

  4ePers varchar(200) NOT NULL,

  5ePers varchar(200) NOT NULL,

  6ePers varchar(200) NOT NULL

)";



	

	$insert1 = "INSERT INTO mots.verbe values('$_POST[infinitif]', '$_POST[traduction]', 'present', '$vbEn1', '$vbEn2', '$vbEn3', '$vbEn4', '$vbEn5', '$vbEn6' )";

	$insert2 = "INSERT INTO mots.verbe values('$_POST[infinitif]', '$_POST[traduction]', 'imparfait', '$vbEn7', '$vbEn8', '$vbEn9', '$vbEn10', '$vbEn11', '$vbEn12' )";

	

	echo "<br> L'ajout s'est effectué avec succès. Merci de votre participation.";



	$requete = $bdd->exec($insert);	

	$requete1 = $bdd->exec($insert1);

	$requete2 = $bdd->exec($insert2);



	



}
 else {echo "Veuillez réessayer";}

?>









</p>



</body>
