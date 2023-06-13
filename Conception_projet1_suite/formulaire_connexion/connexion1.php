<?php
$localhost = '127.0.0.1';
$user = 'root';
$password ='';
$db = "liste_des_apprenants";

$dbh=mysqli_connect($localhost,$user,$password,$db);

if(!$dbh){
    die('could not connect to database');
}
echo 'connecter avec succès';


?>