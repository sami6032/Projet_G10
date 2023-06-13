<?php
session_start();

// Vérifier si l'administrateur est connecté
if (isset($_SESSION['administrateur'])) {
    // Détruire la session
    session_destroy();
    
    // Rediriger vers la page de connexion
    header("Location: login.php");
    exit();
} else {
    // L'administrateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: formulaire_d'inscription/index.php ");
    exit();
}
?>



<!-- bloquer -->
  



<!-- hacher -->
<!-- $hashed_password = password_hash ($mot_de_passe, PASSWORD_DEFAULT); -->