<?php

try { $bdd = new PDO('mysql:host=localhost;dbname=wiki-traducteur', 'root', '');
        echo ‘Connexion établie’; }
        catch(PDOException $dbex) {
            die(‘Erreur de connexion :’ .$dbex -> getMessage()) ; }
            
            
?>
