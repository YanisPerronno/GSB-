<?php
$source="mysql:host=localhost;dbname=gsbv2";
$utilisateur="admin";
$mot_de_passe="password";

$db = new PDO ($source, $utilisateur, $mot_de_passe) ;

$sql_select = "SELECT * FROM visiteur ";
$st = $db->prepare($sql_select);

$st->execute();

$ligne = $st->fetchAll();

print_r($ligne);



?>