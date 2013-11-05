<!DOCTYPE html/>
<html>
        <head>
                <meta content=" text/javascript ; charset=UTF-8"/>
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
         
         <a id='warp' href=''> Français ==> Anglais </a>

         <div id='act'>
                <textarea rows=3 cols=15></textarea> 

                <button id='bt'>
                        Traduire
                 </button>
                <div id='trad'>
                 </div>
		 </div>

 <div id='Connexion'>
		 <form action='login.php' method='post'>        
                <p><label> Votre pseudo </label>
                        <input type="text" name="pseudo" />
                </p>
                <p><label>Mot de Passe</label>
                        <input type="password" name="pass"/>
                </p>
               <p><input type='submit' value='Se connecter'>
			    </p>
        </form>
			<a id='signIn' href='inscription.php'> S'inscrire ? </a>
		</div> 
<?php
	include('fin.html');
?>
		
