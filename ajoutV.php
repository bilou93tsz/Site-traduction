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

<?php



include('terminaisonFrancaise.php');

include('terminaisonAnglaise.php');



	

	if(!empty($_POST['groupe1'])) {    /* verbe français du 1er groupe */

		
	$verbeFr = substr($_POST['verbeFrancais'],0,-2);  /* substr() va retirer les 2 dernières lettres pour obtenir le radical du verbe*/

		 

	$verbeFr1 = $verbeFr.$groupe1['present1'];

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

	$verbeFr18 = $verbeFr.$groupe1['futur6']; 

	

	echo  "   <form method='post' action='ajoutV4.php'> 



					<table id='tab'> 

						<tr>  

							 <th></th>

                                                         <th> Conjugaison du verbe Français </th>

						</tr>

						<tr>

						  	 <th></th>

                           			  	 <th>Présent</th>

						    	 <th>Imparfait</th>

						  	 <th>Futur</th>

						 </tr>

						 <tr>

					         <td>Je</td>	  

						 <td><input type='text' name='vbfranc1'   value='". $verbeFr1."'></td>

						 <td><input type='text' name='vbfranc7'   value='". $verbeFr7."'></td>

						 <td><input type='text' name='vbfranc13'   value='". $verbeFr13."'> </td>

							  </tr>

							   <tr>

							  <td>Tu</td>

							  <td><input type='text' name='vbfranc2'   value='". $verbeFr2."'> </td>

							  <td><input type='text' name='vbfranc8'   value='". $verbeFr8 ."'> </td>

							  <td><input type='text' name='vbfranc14'   value='". $verbeFr14 ."'> </td>

							  </tr>

							   <tr>

							  <td>Il\Elle</td>

							  <td><input type='text' name='vbfranc3'   value='". $verbeFr3 ."'> </td>

							  <td><input type='text' name='vbfranc9'   value='". $verbeFr9."'></td>

							  <td><input type='text' name='vbfranc15'   value='". $verbeFr15."'> </td>

							  </tr>

							   <tr>

							  <td>Nous</td>

							  <td><input type='text' name='vbfranc4'   value='". $verbeFr4 ."'> </td>	

							  <td><input type='text' name='vbfranc10'   value='". $verbeFr10 ."'> 								  </td>

							  <td><input type='text' name='vbfranc16'   value='". $verbeFr16 ."'> </td>

							  </tr>

							   <tr>

							  <td>Vous</td>

							  <td><input type='text' name='vbfranc5'   value='". $verbeFr5  ."'> </td>

							  <td><input type='text' name='vbfranc11'   value='". $verbeFr11  ."'> 								  </td>

							  <td><input type='text' name='vbfranc17'   value='". $verbeFr17 ."'> </td>

							  </tr>

							   <tr>

							  <td>Ils\Elles</td>

							  <td><input type='text' name='vbfranc6'   value='". $verbeFr6 ."'> </td>

							  <td><input type='text' name='vbfranc12'   value='". $verbeFr12 ."'> 								   </td>

							  <td><input type='text' name='vbfranc18'   value='". $verbeFr18 ."'> </td>

							  </tr>

							   

							  <input type='submit' class='boutton' id='bout' value='Valider' />

							  <input type='submit' class='boutton' value='Annuler' />

							  </table> </form> 	

							

							" ; 

						 

	

	}


	elseif (!empty($_POST['groupe2'])){

		
	$verbe2Fr = substr($_POST['verbeFrancais'],0,-2);

	 

	$verbe2Fr1 = $verbe2Fr.$groupe2['present1'];

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



	echo  "   <form method='post' action='ajoutV4.php'> 



					<table id='tab'> 

						<tr>  

							 <th></th>

                                                         <th> Conjugaison du verbe Français </th>

						</tr>

						<tr>

						  	 <th></th>

                           			  	 <th>Présent</th>

						    	 <th>Imparfait</th>

						  	 <th>Futur</th>

						 </tr>

						 <tr>

					         <td>Je</td>	  

						 <td><input type='text' name='vbfranc1'   value='". $verbe2Fr1."'></td>

						 <td><input type='text' name='vbfranc7'   value='". $verbe2Fr7."'></td>

						 <td><input type='text' name='vbfranc13'   value='". $verbe2Fr13."'> </td>

							  </tr>

							   <tr>

							  <td>Tu</td>

							  <td><input type='text' name='vbfranc2'   value='". $verbe2Fr2."'> </td>

							  <td><input type='text' name='vbfranc8'   value='". $verbe2Fr8 ."'> </td>

							  <td><input type='text' name='vbfranc14'   value='". $verbe2Fr14 ."'> </td>

							  </tr>

							   <tr>

							  <td>Il\Elle</td>

							  <td><input type='text' name='vbfranc3'   value='". $verbe2Fr3 ."'> </td>

							  <td><input type='text' name='vbfranc9'   value='". $verbe2Fr9."'></td>

							  <td><input type='text' name='vbfranc15'   value='". $verbe2Fr15."'> </td>

							  </tr>

							   <tr>

							  <td>Nous</td>

							  <td><input type='text' name='vbfranc4'   value='". $verbe2Fr4 ."'> </td>	

							  <td><input type='text' name='vbfranc10'   value='". $verbe2Fr10 ."'> 								  </td>

							  <td><input type='text' name='vbfranc16'   value='". $verbe2Fr16 ."'> </td>

							  </tr>

							   <tr>

							  <td>Vous</td>

							  <td><input type='text' name='vbfranc5'   value='". $verbe2Fr5  ."'> </td>

							  <td><input type='text' name='vbfranc11'   value='". $verbe2Fr11  ."'> 								  </td>

							  <td><input type='text' name='vbfranc17'   value='". $verbe2Fr17 ."'> </td>

							  </tr>

							   <tr>

							  <td>Ils\Elles</td>

							  <td><input type='text' name='vbfranc6'   value='". $verbe2Fr6 ."'> </td>

							  <td><input type='text' name='vbfranc12'   value='". $verbe2Fr12 ."'> 								   </td>

							  <td><input type='text' name='vbfranc18'   value='". $verbe2Fr18 ."'> </td>

							  </tr>

							   

							  <input type='submit' class='boutton' id='bout' value='Valider' />

							  <input type='submit' class='boutton' value='Annuler' />

							  </table> </form> 	

							

							" ; 

	}


	elseif(!empty($_POST['groupe3'])) {



echo  "   <form method='post' action='ajoutV4.php'> 



					<table id='tab'> 

						<tr>  

							 <th></th>

                                                         <th> Conjugaison du verbe Français </th>

						</tr>

						<tr>

						  	 <th></th>

                           			  	 <th>Présent</th>

						    	 <th>Imparfait</th>

						  	 <th>Futur</th>

						 </tr>

						 <tr>

					         <td>Je</td>	  

						 <td><input type='text' name='vbfranc1'  ></td>

						 <td><input type='text' name='vbfranc7' ></td>

						 <td><input type='text' name='vbfranc13' ></td>

							  </tr>

							   <tr>

							  <td>Tu</td>

							  <td><input type='text' name='vbfranc2' > </td>

							  <td><input type='text' name='vbfranc8' > </td>

							  <td><input type='text' name='vbfranc14'> </td>

							  </tr>

							   <tr>

							  <td>Il\Elle</td>

							  <td><input type='text' name='vbfranc3' > </td>

							  <td><input type='text' name='vbfranc9' ></td>

							  <td><input type='text' name='vbfranc15' > </td>

							  </tr>

							   <tr>

							  <td>Nous</td>

							  <td><input type='text' name='vbfranc4' > </td>	

							  <td><input type='text' name='vbfranc10' ></td>

							  <td><input type='text' name='vbfranc16' > </td>

							  </tr>

							   <tr>

							  <td>Vous</td>

							  <td><input type='text' name='vbfranc5' > </td>

							  <td><input type='text' name='vbfranc11' ></td>

							  <td><input type='text' name='vbfranc17' > </td>

							  </tr>

							   <tr>

							  <td>Ils\Elles</td>

							  <td><input type='text' name='vbfranc6' > </td>

							  <td><input type='text' name='vbfranc12' ></td>

							  <td><input type='text' name='vbfranc18' > </td>

							  </tr>

							   

							  <input type='submit' class='boutton' id='bout' value='Valider' />

							  <input type='submit' class='boutton' value='Annuler' />

							  </table> </form> 	

							

							" ; 

}





	elseif (!empty($_POST['groupeReg'])){

		
	$verbeEn = $_POST['verbeAnglais'];



	$verbeEn1 = $verbeEn.$groupeReg['present1'];

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

	

echo  "   <form method='post' action='ajoutV4.php'> 



					<table id='tab'> 

						<tr>  

							 <th></th>

                                                         <th> Conjugaison du verbe Anglais </th>

						</tr>

						<tr>

						  	 <th></th>

                           			  	 <th>Présent</th>

						    	 <th>Imparfait</th>

						  	 

						 </tr>

						 <tr>

					         <td>I</td>	  

						 <td><input type='text' name='vbEn1'   value='". $verbeEn1."'></td>

						 <td><input type='text' name='vbEn7'   value='". $verbeEn7."'></td>

						

							  </tr>

							   <tr>

							  <td>You</td>

							  <td><input type='text' name='vbEn2'   value='". $verbeEn2."'> </td>

							  <td><input type='text' name='vbEn8'   value='". $verbeEn8 ."'> </td>

							 

							  </tr>

							   <tr>

							  <td>He\She\It</td>

							  <td><input type='text' name='vbEn3'   value='". $verbeEn3 ."'> </td>

							  <td><input type='text' name='vbEn9'   value='". $verbeEn9."'></td>

							

							  </tr>

							   <tr>

							  <td>We</td>

							  <td><input type='text' name='vbEn4'   value='". $verbeEn4 ."'> </td>	

							  <td><input type='text' name='vbEn10'   value='". $verbeEn10 ."'> 								  </td>

							 

							  </tr>

							   <tr>

							  <td>You</td>

							  <td><input type='text' name='vbEn5'   value='". $verbeEn5  ."'> </td>

							  <td><input type='text' name='vbEn11'   value='". $verbeEn11  ."'> 								  </td>

							  

							  </tr>

							   <tr>

							  <td>They</td>

							  <td><input type='text' name='vbEn6'   value='". $verbeEn6 ."'> </td>

							  <td><input type='text' name='vbEn12'   value='". $verbeEn12 ."'> 								   </td>

							  

							  </tr>

							   

							  <input type='submit' class='boutton' id='bout' value='Valider' />

							  <input type='submit' class='boutton' value='Annuler' />

							  </table> </form> 	

							

							" ; 

	}





	elseif (!empty($_POST['groupeIrr'])){

	

		echo  "   <form method='post' action='ajoutV4.php'> 



					<table id='tab'> 

						<tr>  

							 <th></th>

                                                         <th> Conjugaison du verbe Anglais </th>

						</tr>

						<tr>

						  	 <th></th>

                           			  	 <th>Présent</th>

						    	 <th>Imparfait</th>

						  	 

						 </tr>

						 <tr>

					         <td>I</td>	  

						 <td><input type='text' name='vbEn1'   ></td>

						 <td><input type='text' name='vbEn7'  ></td>

						 

							  </tr>

							   <tr>

							  <td>You</td>

							  <td><input type='text' name='vbEn2'   > </td>

							  <td><input type='text' name='vbEn8'   > </td>

							  

							  </tr>

							   <tr>

							  <td>He\She\It</td>

							  <td><input type='text' name='vbEn3'   > </td>

							  <td><input type='text' name='vbEn9'   ></td>

							  

							  </tr>

							   <tr>

							  <td>We</td>

							  <td><input type='text' name='vbEn4'   > </td>	

							  <td><input type='text' name='vbEn10'   ></td>

							 

							  </tr>

							   <tr>

							  <td>You</td>

							  <td><input type='text' name='vbEn5'   > </td>

							  <td><input type='text' name='vbEn11'   ></td>

							 

							  </tr>

							   <tr>

							  <td>They</td>

							  <td><input type='text' name='vbEn6'   > </td>

							  <td><input type='text' name='vbEn12'   ></td>

							  

							  </tr>

							   

							  <input type='submit' class='boutton' id='bout' value='Valider' />

							  <input type='submit' class='boutton' value='Annuler' />

							  </table> </form> 	

							

							" ; 

	}

?>



</body>
