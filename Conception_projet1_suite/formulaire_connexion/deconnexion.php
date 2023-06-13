<!-- <?php
// session_start();

// // Vérifier si l'administrateur est connecté
// if (isset($_SESSION['administrateur'])) {
//     // Détruire la session
//     session_destroy();
    
//     // Rediriger vers la page de connexion
//     header("Location: login.php ");
//     exit();
// } else {
//     // L'administrateur n'est pas connecté, rediriger vers la page de connexion
//     header("Location: login.php ");
//     exit();
// }
?> -->
<?php
   session_start();
   session_destroy();
   header("location:login.php");
?>


<!-- bloquer -->
  
<?php
// session_start();
// unset($_SESSION["id"]);
// unset($_SESSION["email"]);
// header("Location: login.php");
?>


<!-- hacher -->
<!-- $hashed_password = password_hash ($mot_de_passe, PASSWORD_DEFAULT); -->