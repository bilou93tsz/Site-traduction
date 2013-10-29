require('includes/startbdd.php');

$req="CREATE TABLE if nos exists 'Utilisateurs'(
           id integer PRIMARY KEY NOT NULL auto_increment, 
           login varchar(12) UNIQUE NOT NULL,
           password varchar(12) NOT NULL,
           age int(3),
           sexe boolean enum('Homme', 'Femme'),
           e-mail varchar(64) NOT NULL,
           regdate int(10) unsigned NOT NULL // date enregistrement de l'utilisateur
           
       )"; 
       
require('includes/stopbdd.php');








