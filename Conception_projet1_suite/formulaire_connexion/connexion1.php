<?php
$localhost = '127.0.0.1';
$user = 'root';
$password ='';
$db = "liste_des_apprenants";
$mot_de_passe = $_POST["mot_de_passe"];

$dbh=mysqli_connect($localhost,$user,$password,$db);

if(!$dbh){
    die('could not connect to database');
}
echo 'connecter avec succès';
$hashed_password = password_hash ($mot_de_passe, PASSWORD_DEFAULT);

?>