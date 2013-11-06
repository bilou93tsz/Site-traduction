<?php
session_start(); // ouverture de la session

// Suppression des variables de session et de la session elle même
$_SESSION = array();
session_destroy();

echo ' Vous avez été déconnecté ';

?>
