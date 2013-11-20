<!DOCTYPE HTML>

<html>

<head>
<title>Lire le fichier CSV</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>


<?php

// on ajoutera tout ce corps sous la forme de fonction dans "import_csv.php" dans le try ou il y a la connexion a la base de donnees


//faire en sorte que sa marche pr nimporte quel fichier csv : normalement prend automatiquement le nom temp.csv
if (file_exists("131107ALL.csv"))
{
echo "Le fichier csv existe, on va donc commencer la manipulation ";
echo '<br />';
$time_start = microtime(true);
}
else
{
echo "Fichier inexistant ";
echo '<br />';
} 


echo mb_internal_encoding();

$csv = new SplFileObject('131107ALL.csv', 'r');



/*Constantes pré-définies
SplFileObject::READ_CSV

    Lit les lignes en tant que lignes CSV.
*/
$options = SplFileObject::READ_CSV + SplFileObject::DROP_NEW_LINE + SplFileObject::SKIP_EMPTY;
$csv->setFlags($options);


// SplFileObject::setCsvControl à Définit les options CSV
$csv->setCsvControl(';');


try {
$conn = new PDO("pgsql:host=localhost;dbname=adc_groupe", "postgres", "admin");

// il faut supprimer l'intégralité de la base excepté les lignes ou x = 0 et x = 1 !! 
$query1="DELETE FROM indicateur_tmp WHERE x IS NULL;";
$reponse1 = $conn->prepare($query1);
$reponse1->execute(array()) or die(print_r($reponse1->errorInfo()));



// élément présent dans la bdd
$query="SELECT bafcode,x FROM indicateur_tmp;";
$reponse = $conn->prepare($query);
$reponse->execute(array()) or die(print_r($reponse->errorInfo()));


}

catch(PDOException $e)
{
	echo 'ERROR: ' . $e->getMessage();
}

$tab_csv[] = array(); // va contenir toute les valeurs venant du fichier csv
$tab_bdd[] = array(); // va contenir toute les valeurs venant de la requete $query
$i=0;
$j=0;
$e=0;
$boo = FALSE;
$boolean = FALSE;
$fichier = fopen('fichier.txt', 'a');
$erreur = ' ' ;

echo ' Voila tout les codes affaires de la bdd ainsi que la valeur de leur x';
echo '<br />';
while ( $donnees = $reponse->fetch(PDO::FETCH_ASSOC) ) // on stocke les donnes du résultat de la requete SELECT dans le tableau $tab_bdd
{
	$tab_bdd['bafcode'][$j] = $donnees['bafcode'];
	$tab_bdd['x'][$j] = $donnees['x'];
	echo $tab_bdd['bafcode'][$j]. ' - ' .$tab_bdd['x'][$j];
	echo '<br />';
	$j++;
}
echo '<br />';
echo count($tab_bdd['bafcode']). ' est la taille du tableau genere par les resultats venant de la bdd';
echo '<br />';



//$query3="INSERT INTO indicateur_tmp (bclcode,bcldesig,bclactif,bafcode,bafident,bafdos,bafaxe,bafcliad1,bafclicp,bafclivil,baffin,bafbticode,bafclicod,bafdatefin,bafzop046,bafzop047,bafdatcre,bafclipays,paydesig,bgscode,bgsdesig,bsacode,bsadesig,bsabgscode,codepremierdoc,datepremierdoc,datedernierreglement,datedernierefacture,echeancedernierefacture,marcheht,marchettc,factureht,facturettc,regle,datderfact,debourseprevu,deboursfou,debourssto,deboursloc,debourssst,deboursmo,morealise,moqtrealise,deboursestock,cfe_1,cfe_2,cfe_3,cfe_4,cfe_5,cfe_tot,lfe_1,lfe_2,lfe_3,lfe_4,lfe_5,lfe_tot,ffe_1,ffe_2,ffe_3,ffe_4,ffe_5,ffe_tot,avtcalendaire)
//			VALUES";


// on va lire toute les lignes du fichier csv 
echo '<br />';
echo 'On affiche tout les codes affaires du fichier csv et on determine si il y en a identique dans la bdd :' ;
echo '<br />';
foreach($csv as $ligne)
{

	echo '<br />';
	echo '<strong>Code affaire du fichier csv: </strong>'.$ligne[3]; 
	echo '<br />';
	
	$tab_csv[$i] = $ligne[3];
	// on traite tout ce qui sera rentré dans une colonne de type numeric en remplacant la , par un . 
	$ligne[29] = strtr($ligne[29], ",", ".");
	$ligne[30] = strtr($ligne[30], ",", ".");
	$ligne[31] = strtr($ligne[31], ",", ".");
	$ligne[32] = strtr($ligne[32], ",", ".");
	$ligne[33] = strtr($ligne[33], ",", ".");
	$ligne[35] = strtr($ligne[35], ",", ".");
	$ligne[36] = strtr($ligne[36], ",", ".");
	$ligne[38] = strtr($ligne[38], ",", ".");
	$ligne[39] = strtr($ligne[39], ",", ".");
	$ligne[40] = strtr($ligne[40], ",", ".");
	$ligne[41] = strtr($ligne[41], ",", ".");
	$ligne[42] = strtr($ligne[42], ",", ".");
	$ligne[44] = strtr($ligne[44], ",", ".");
	$ligne[46] = strtr($ligne[46], ",", ".");
	$ligne[47] = strtr($ligne[47], ",", ".");
	$ligne[48] = strtr($ligne[48], ",", ".");
	$ligne[49] = strtr($ligne[49], ",", ".");
	$ligne[50] = strtr($ligne[50], ",", ".");
	$ligne[52] = strtr($ligne[52], ",", ".");
	$ligne[53] = strtr($ligne[53], ",", ".");
	$ligne[54] = strtr($ligne[54], ",", ".");
	$ligne[55] = strtr($ligne[55], ",", ".");
	$ligne[56] = strtr($ligne[56], ",", ".");
	$ligne[58] = strtr($ligne[58], ",", ".");
	$ligne[59] = strtr($ligne[59], ",", ".");
	$ligne[60] = strtr($ligne[60], ",", ".");
	$ligne[61] = strtr($ligne[61], ",", ".");
	$ligne[62] = strtr($ligne[62], ",", ".");

/*	$query2="UPDATE indicateur_tmp SET bclcode='".$ligne[0]."',bcldesig='".$ligne[1]."',bclactif='".$ligne[2]."',bafident='".$ligne[4]."',bafdos='".$ligne[5]."',bafaxe='".$ligne[6]."',bafcliad1='".$ligne[7]."',bafclicp='".$ligne[8]."',bafclivil='".$ligne[9]."',baffin='".$ligne[10]."',bafbticode='".$ligne[11]."',bafclicod='".$ligne[12]."',bafdatefin='".$ligne[13]."',bafzop046='".$ligne[14]."',bafzop047='".$ligne[15]."',bafdatcre='".$ligne[16]."',bafclipays='".$ligne[17]."',paydesig='".$ligne[18]."',bgscode='".$ligne[19]."',bgsdesig='".$ligne[20]."',bsacode='".$ligne[21]."',bsadesig='".$ligne[22]."',bsabgscode='".$ligne[23]."',codepremierdoc='".$ligne[24]."',datepremierdoc='".$ligne[25]."',datedernierreglement='".$ligne[26]."',datedernierefacture='".$ligne[27]."',echeancedernierefacture='".$ligne[28]."',marcheht='".$ligne[29]."',marchettc='".$ligne[30]."',factureht='".$ligne[31]."',facturettc='".$ligne[32]."',regle='".$ligne[33]."',datderfact='".$ligne[34]."',debourseprevu='".$ligne[35]."',deboursfou='".$ligne[36]."',debourssto='".$ligne[37]."',deboursloc='".$ligne[38]."',debourssst='".$ligne[39]."',deboursmo='".$ligne[40]."',morealise='".$ligne[41]."',moqtrealise='".$ligne[42]."',deboursestock='".$ligne[43]."',cfe_1='".$ligne[44]."',cfe_2='".$ligne[45]."',cfe_3='".$ligne[46]."',cfe_4='".$ligne[47]."',cfe_5='".$ligne[48]."',cfe_tot='".$ligne[49]."',lfe_1='".$ligne[50]."',lfe_2='".$ligne[51]."',lfe_3='".$ligne[52]."',lfe_4='".$ligne[53]."',lfe_5='".$ligne[54]."',lfe_tot='".$ligne[55]."',ffe_1='".$ligne[56]."',ffe_2='".$ligne[57]."',ffe_3='".$ligne[58]."',ffe_4='".$ligne[59]."',ffe_5='".$ligne[60]."',ffe_tot='".$ligne[61]."',avtcalendaire='".$ligne[62]."' WHERE bafcode = '22081' ;" ;
	$req1 = $conn->prepare($query2);
	$req1->execute(array()); // la mise a jour fonctionne correctement */
	

	
	for($k=0; $k<count($tab_bdd['bafcode']); $k++)
	{
		switch($tab_bdd['bafcode'][$k])
		{
			case $tab_csv[$i]: //différencier les cas selon que l'on ait un x = 0, x=1 et x vaut null
				echo 'Le ' .$k.'eme element de la bdd a le meme code affaire, on le met donc a jour.';
				echo '<br />';
				switch($tab_bdd['x'][$k])
				{
					case 0:
						echo 'Son x est a 0 donc on met a jour tout ces champs grace au fichier csv';
						echo '<br />';
						
						$query2="UPDATE indicateur_tmp SET bclcode='".$ligne[0]."',bcldesig='".$ligne[1]."',bclactif='".$ligne[2]."',bafident='".$ligne[4]."',bafdos='".$ligne[5]."',bafaxe='".$ligne[6]."',bafcliad1='".$ligne[7]."',bafclicp=".$ligne[8].",bafclivil='".$ligne[9]."',baffin='".$ligne[10]."',bafbticode='".$ligne[11]."',bafclicod='".$ligne[12]."',bafdatefin='".$ligne[13]."',bafzop046='".$ligne[14]."',bafzop047='".$ligne[15]."',bafdatcre='".$ligne[16]."',bafclipays='".$ligne[17]."',paydesig='".$ligne[18]."',bgscode='".$ligne[19]."',bgsdesig='".$ligne[20]."',bsacode='".$ligne[21]."',bsadesig='".$ligne[22]."',bsabgscode='".$ligne[23]."',codepremierdoc=".$ligne[24].",datepremierdoc='".$ligne[25]."',datedernierreglement='".$ligne[26]."',datedernierefacture='".$ligne[27]."',echeancedernierefacture='".$ligne[28]."' ,marcheht=".$ligne[29].", marchettc='".$ligne[30]."',factureht='".$ligne[31]."',facturettc='".$ligne[32]."',regle='".$ligne[33]."',datderfact='".$ligne[34]."',debourseprevu='".$ligne[35]."',deboursfou='".$ligne[36]."',debourssto=".$ligne[37].",deboursloc='".$ligne[38]."',debourssst='".$ligne[39]."',deboursmo='".$ligne[40]."',morealise='".$ligne[41]."',moqtrealise='".$ligne[42]."',deboursestock=".$ligne[43].",cfe_1='".$ligne[44]."',cfe_2=".$ligne[45].",cfe_3='".$ligne[46]."',cfe_4='".$ligne[47]."',cfe_5='".$ligne[48]."',cfe_tot='".$ligne[49]."',lfe_1='".$ligne[50]."',lfe_2=".$ligne[51].",lfe_3='".$ligne[52]."',lfe_4='".$ligne[53]."',lfe_5='".$ligne[54]."',lfe_tot='".$ligne[55]."',ffe_1='".$ligne[56]."',ffe_2=".$ligne[57].",ffe_3='".$ligne[58]."',ffe_4='".$ligne[59]."',ffe_5='".$ligne[60]."',ffe_tot='".$ligne[61]."',avtcalendaire='".$ligne[62]."' WHERE bafcode = '".$tab_bdd['bafcode'][$k]."' ;" ;
						$time_end = microtime(true);
						echo '<br />';
						echo $query2;
						echo '<br />';
						$req1 = $conn->prepare($query2);
						$req1->execute(array()) or die(print_r($req1->errorInfo()));
						echo '<br />';
						echo 'Mise à jour effectuée !';
						echo '<br />';
						$boo = True;
						break;
					case NULL:
						echo 'Cas normalement inexistant à cause de la requete query1 ?';
						echo '<br />';
						// cas ou le bafcode est identique mais x a NULL ? Ce cas ne devrait pas exister a cause de $query1
						break;
					case 1:
						echo 'On ne touche pas en fin de compte.';
						echo '<br />';
						$boo = True;
						// on ne fait rien ici
						break;
					default:
						echo 'Son x a une valeur differente de 0, de 1 et de NULL.';
						echo '<br />';
						$boo = True;
						// cas ou x vaut autre chose que 0 1 ou NULL, faire qqch ?
				}

				break 2; // en rajoutant 2, il met fin au switch($tab_bdd['x'][$k]) et a switch($tab_bdd['bafcode'][$k])
			default: // si on met requete d'ajout dans la bdd celle ci sera executer 29 fois a cause de la boucle for, il faut l'utiliser ailleurs.			
				echo '.';
				$boo = FALSE;
		}


	}

	echo ' Ces "." correspondent aux nombres de test effectues';
	echo '<br />';

	for($l=0; $l<count($tab_bdd['bafcode']); $l++)
	{
		if( ($tab_csv[$i] != $tab_bdd['bafcode'][$l]) AND ($boo == FALSE) )
		{
			echo '! : ' ;
			echo ' Indique l\'insertion dans la bdd';
			echo '<br />';

// le insert into fonctionne, a été testé
			$query3="INSERT INTO indicateur_tmp (bclcode,bcldesig,bclactif,bafcode,bafident,bafdos,bafaxe,bafcliad1,bafclicp,bafclivil,baffin,bafbticode,bafclicod,bafdatefin,bafzop046,bafzop047,bafdatcre,bafclipays,paydesig,bgscode,bgsdesig,bsacode,bsadesig,bsabgscode,codepremierdoc,datepremierdoc,datedernierreglement,datedernierefacture,echeancedernierefacture,marcheht,marchettc,factureht,facturettc,regle,datderfact,debourseprevu,deboursfou,debourssto,deboursloc,debourssst,deboursmo,morealise,moqtrealise,deboursestock,cfe_1,cfe_2,cfe_3,cfe_4,cfe_5,cfe_tot,lfe_1,lfe_2,lfe_3,lfe_4,lfe_5,lfe_tot,ffe_1,ffe_2,ffe_3,ffe_4,ffe_5,ffe_tot,avtcalendaire) VALUES ('".$ligne[0]."', '".$ligne[1]."', '".$ligne[2]."', '".$ligne[3]."', '".$ligne[4]."','".$ligne[5]."','".$ligne[6]."','".$ligne[7]."',".$ligne[8].",'".$ligne[9]."','".$ligne[10]."','".$ligne[11]."','".$ligne[12]."','".$ligne[13]."','".$ligne[14]."','".$ligne[15]."','".$ligne[16]."','".$ligne[17]."','".$ligne[18]."','".$ligne[19]."','".$ligne[20]."','".$ligne[21]."','".$ligne[22]."','".$ligne[23]."',".$ligne[24].",'".$ligne[25]."','".$ligne[26]."','".$ligne[27]."','".$ligne[28]."',".$ligne[29].",".$ligne[30].",".$ligne[31].",".$ligne[32].",".$ligne[33].",'".$ligne[34]."',".$ligne[35].",".$ligne[36].",".$ligne[37].",".$ligne[38].",".$ligne[39].",".$ligne[40].",".$ligne[41].",".$ligne[42].",".$ligne[43].",".$ligne[44].",".$ligne[45].",".$ligne[46].",".$ligne[47].",".$ligne[48].",".$ligne[49].",".$ligne[50].",".$ligne[51].",".$ligne[52].",".$ligne[53].",".$ligne[54].",".$ligne[55].",".$ligne[56].",".$ligne[57].",".$ligne[58].",".$ligne[59].",".$ligne[60].",".$ligne[61].",".$ligne[62].");";
//$query3 .= "('".$ligne[0]."', '".$ligne[1]."', '".$ligne[2]."', '".$ligne[3]."', '".$ligne[4]."','".$ligne[5]."','".$ligne[6]."','".$ligne[7]."',".$ligne[8].",'".$ligne[9]."','".$ligne[10]."','".$ligne[11]."','".$ligne[12]."','".$ligne[13]."','".$ligne[14]."','".$ligne[15]."','".$ligne[16]."','".$ligne[17]."','".$ligne[18]."','".$ligne[19]."','".$ligne[20]."','".$ligne[21]."','".$ligne[22]."','".$ligne[23]."',".$ligne[24].",'".$ligne[25]."','".$ligne[26]."','".$ligne[27]."','".$ligne[28]."',".$ligne[29].",".$ligne[30].",".$ligne[31].",".$ligne[32].",".$ligne[33].",'".$ligne[34]."',".$ligne[35].",".$ligne[36].",".$ligne[37].",".$ligne[38].",".$ligne[39].",".$ligne[40].",".$ligne[41].",".$ligne[42].",".$ligne[43].",".$ligne[44].",".$ligne[45].",".$ligne[46].",".$ligne[47].",".$ligne[48].",".$ligne[49].",".$ligne[50].",".$ligne[51].",".$ligne[52].",".$ligne[53].",".$ligne[54].",".$ligne[55].",".$ligne[56].",".$ligne[57].",".$ligne[58].",".$ligne[59].",".$ligne[60].",".$ligne[61].",".$ligne[62]."), ";
			//	echo $query3;
			$time_end = microtime(true);
			$req2 = $conn->prepare($query3);
			echo '<br />';
			$req2->execute() or $boolean = true;
			if($boolean == true)
			{
			//	$erreur = print_r($req2->errorInfo());
				fputs($fichier, "$query3");
			//	fputs($fichier, "$erreur");
				echo $query3;
				echo '<br />';
				print_r($req2->errorInfo());
				echo '<br />';
				echo ' Il y a eu une erreur ici.';
				$boolean = false;
			} 

			break 1;
			
		}
	} 


	$i++ ;
	
}
fclose($fichier);


echo '<br />';
echo '<br />';
$time = $time_end - $time_start;
echo ' L\'execution du programme a durée : ' ;
echo $time. ' secondes';

$total_csv = $i;


$query8 = $conn->query("SELECT COUNT(*) AS nb FROM indicateur_tmp");
$row = $query8->fetch();
$total_bdd = $row['nb'];


echo '<br />';


echo '<br />';
echo $total_bdd. ' lignes dans la base de données';
echo '<br />';
$total_erreur = $total_csv - $total_bdd ;
echo ' Il y a un total de : ';
echo $total_erreur. ' erreurs <br />';

echo 'Vous pouvez voir toute les requêtes comportant des erreurs ici : ';

echo'<a href="fichier.txt"> Erreurs.txt </a>' ;

/*
$query3 .= rtrim($query3, ",");
echo $query3;

$req2 = $conn->prepare($query3);
echo '<br />';
$req2->execute() or die(print_r($req2->errorInfo())); // TU ES ICI : COMPRENDRE PK ERREUR D'ENCODAGE UTF 8

// faire un select ou x n'existe pas et tout supprimer pr reprendre la bdd de base
*/
?> 


</body>

</html>
