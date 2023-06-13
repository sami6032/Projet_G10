<?php
session_start();
require '../connexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['date_de_naissance'];
$formation_de_base = $_POST['formation_de_base'];
$ville_d_origine =  $_POST['ville_origine'];

if(isset($nom,$prenom ,$date_de_naissance,$formation_de_base,$ville_d_origine ))
{
    $sql = "INSERT INTO apprenant (nom, prenom, 
date_de_naissance, formation_de_base, ville_origine)
        VALUES ('$nom', '$prenom', '$date_de_naissance', 
        '$formation_de_base', '$ville_d_origine')";
    
    $query_run = mysqli_query($conn, $sql);

    if($query_run)
    {
        $_SESSION['message'] = "Succès";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Echec";
        header("Location: ../index.php");
        exit(0);
    }
}


    $sql = "INSERT INTO apprenant (nom, prenom, 
date_de_naissance, formation_de_base, ville_d_origine)
        VALUES ('$nom', '$prenom', '$date_de_naissance', 
        '$formation_de_base', '$ville_origine')";


// Fermer la connexion à la base de données

if(isset($_POST['delete_apprenant']))
{
    $apprenant_id = mysqli_real_escape_string($conn, $_POST['delete_apprenant']);

    $query = "DELETE FROM apprenant WHERE id='$apprenant_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Apprenant supprimé avec succès";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Echec de suppression";
        header("Location: ../index.php");
        exit(0);
    }
}

if(isset($_POST['modifier']))
{
    $apprenant_id = $_POST['apprenant_id'];

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $formation_de_base = $_POST['formation_de_base'];
    $ville_d_origine =  $_POST['ville_d_origine'];
    $query = "UPDATE apprenant SET nom='$nom', prenom='$prenom', date_de_naissance='date_de_naissance', formation_de_base='formation_de_base', ville_d_origine='ville_d_origine' WHERE id='$apprenant_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "appprenant modifié avec succès";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Echec de modification";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_apprenant']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $formation_de_base = $_POST['formation_de_base'];
    $ville_d_origine =  $_POST['ville_d_origine'];

    
    $query = "INSERT INTO apprenant () VALUES (' $nom','$prenom',' $date_de_naissance','formation_de_base','ville_d_origine')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "apprenant ajouter avec succès";
        header("Location: apprenantCreate.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Echec de création";
        header("Location: apprenantCreate.php");
        exit(0);
    }
}

?>