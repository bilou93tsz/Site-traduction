<?php

include('entete.php');

include('terminaisonFrancaise.php');
include('terminaisonAnglaise.php');



	

	if(isset($POST['verbeFrancais']) && $POST['groupe1'] == true){

		$verbeFr = substr($POST['verbeFrancais'],0,-2);

		 

	/*$verbeFr1 = $verbeFr.$groupe1['present1'];

	$verbeFr2 = $verbeFr.$groupe1['present2'];

	$verbeFr3 = $verbeFr.$groupe1['present3'];

	$verbeFr4 = $verbeFr.$groupe1['present4'];

	$verbeFr5 = $verbeFr.$groupe1['present5'];

	$verbeFr6 = $verbeFr.$groupe1['present6'];

	$verbeFr7 = $verbeFr.$groupe1['imparfait1'];

	$verbeFr8 = $verbeFr.$groupe1['imparfait2'];

	$verbeFr9 = $verbeFr.$groupe1['imparfait3'];

	$verbeFr10 = $verbeFr.$groupe1['imparfait4'];

	$verbeFr11 = $verbeFr.$groupe1['imparfait5'];

	$verbeFr12 = $verbeFr.$groupe1['imparfait6'];

	$verbeFr13 = $verbeFr.$groupe1['futur1'];

	$verbeFr14 = $verbeFr.$groupe1['futur2'];

	$verbeFr15 = $verbeFr.$groupe1['futur3'];

	$verbeFr16 = $verbeFr.$groupe1['futur4'];

	$verbeFr17 = $verbeFr.$groupe1['futur5'];

	$verbeFr18 = $verbeFr.$groupe1['futur6']; */


	
	echo "<p> $POST['verbeFrancais']  </p>"   ;   	/*tester l'affichage de la valeur entrée */

	

	}

	elseif (isset($POST['verbeFrancais']) && $POST['groupe2']== true){

		$verbe2Fr = substr($POST['verbeFrancais'],0,-2);

	 

	/*$verbe2Fr1 = $verbe2Fr.$groupe2['present1'];

	$verbe2Fr2 = $verbe2Fr.$groupe2['present2'];

	$verbe2Fr3 = $verbe2Fr.$groupe2['present3'];

	$verbe2Fr4 = $verbe2Fr.$groupe2['present4'];

	$verbe2Fr5 = $verbe2Fr.$groupe2['present5'];

	$verbe2Fr6 = $verbe2Fr.$groupe2['present6'];

	$verbe2Fr7 = $verbe2Fr.$groupe2['imparfait1'];

	$verbe2Fr8 = $verbe2Fr.$groupe2['imparfait2'];

	$verbe2Fr9 = $verbe2Fr.$groupe2['imparfait3'];

	$verbe2Fr10 = $verbe2Fr.$groupe2['imparfait4'];

	$verbe2Fr11 = $verbe2Fr.$groupe2['imparfait5'];

	$verbe2Fr12 = $verbe2Fr.$groupe2['imparfait6'];

	$verbe2Fr13 = $verbe2Fr.$groupe2['futur1'];

	$verbe2Fr14 = $verbe2Fr.$groupe2['futur2'];

	$verbe2Fr15 = $verbe2Fr.$groupe2['futur3'];

	$verbe2Fr16 = $verbe2Fr.$groupe2['futur4'];

	$verbe2Fr17 = $verbe2Fr.$groupe2['futur5'];

	$verbe2Fr18 = $verbe2Fr.$groupe2['futur6'];



	*/

	}

	elseif (isset($POST['verbeFrancais']) && $POST['groupe3']==true ){

	

	

	}

	elseif (isset($POST['verbeAnglais']) && $POST['groupeReg']== true ){

		$verbeEn = $POST['verbeAnglais'];



	/*$verbeEn1 = $verbeEn.$groupeReg['present1'];

	$verbeEn2 = $verbeEn.$groupeReg['present2'];

	$verbeEn3 = $verbeEn.$groupeReg['present3'];

	$verbeEn4 = $verbeEn.$groupeReg['present4'];

	$verbeEn5 = $verbeEn.$groupeReg['present5'];

	$verbeEn6 = $verbeEn.$groupeReg['present6'];

	$verbeEn7 = $verbeEn.$groupeReg['imparfait1'];

	$verbeEn8 = $verbeEn.$groupeReg['imparfait2'];

	$verbeEn9 = $verbeEn.$groupeReg['imparfait3'];

	$verbeEn10 = $verbeEn.$groupeReg['imparfait4'];

	$verbeEn11 = $verbeEn.$groupeReg['imparfait5'];

	$verbeEn12 = $verbeEn.$groupeReg['imparfait6'];
	*/

	}

	elseif (isset($POST['verbeAnglais']) && $POST['groupeIrr'] ==true){

	

	}

?>



</body>
