<?php

session_start();
require 'connexion1.php';

$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];
//                             
// $mot_de_passe = $_POST["mot_de_passe"];
// $date_de_naissance = $_POST['date_de_naissance'];
// $ville_origine =  $_POST['ville_origine'];
// $formation_de_base = $_POST['formation_de_base'];

$hashed_password = password_hash ($mot_de_passe, PASSWORD_DEFAULT);
if(isset($email,$hashed_password ))
{
    $sql = "INSERT INTO administrateur (email, mot_de_passe, date )
        VALUES ('$email', '$hashed_password*',NOW())";
        
    
    $query_run = mysqli_query($dbh, $sql);

    if($query_run)
    {
        $_SESSION['message'] = "Succès";
        header("Location: login1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Echec";
        header("Location: login1.php");
        exit(0);
    }
}




// if(isset($_POST['save_apprenant']))
// {
//     $email = $_POST['email'];
//     $mot_de_passe = $_POST['mot_de_passe'];
    

    
//     $query = "INSERT INTO apprenant () VALUES (' $nom','$prenom',' $date_de_naissance','ville_origine','formation_de_base')";

//     $query_run = mysqli_query($conn, $query);
//     if($query_run)
//     {
//         $_SESSION['message'] = "apprenant ajouter avec succès";
//         header("Location: login1.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Echec de création";
//         header("Location: login1.php");
//         exit(0);
//     }
// }


?>








<?php
// session_start();

// $localhost = '127.0.0.1';
// $user = 'root';
// $password = '';
// $db = "liste_des_apprenants";

// $conn = mysqli_connect($localhost, $user, $password, $db);

// if (!$conn) {
//     die('Impossible de se connecter à la base de données');
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['mot_de_passe'];

//     $query = "SELECT * FROM administrateur WHERE email ='$email' AND mot_de_passe = '$password'";
//     $result = mysqli_query($conn, $query);

//     if (mysqli_num_rows($result) > 0) {
//         // Les informations d'identification sont correctes
//         $_SESSION['email'] = $email;
//         $_SESSION['mot_de_passe'] = $password;
//         header("Location: index.php");
//         exit();
//     } else {
//         // Les informations d'identification sont incorrectes
//         header("Location: login.php?erreur=1");
//         exit();
//     }
// } else {
//     // Si la méthode de requête n'est pas POST, rediriger vers la page de connexion
//     header('Location: login.php');
//     exit();
// }
?>

<!-- 
<?php
// session_start();

// //require_once  "connexion.php";

// // ...
// $localhost = '127.0.0.1';
// $user = 'root';
// $password ='';
// $db = "liste_des_apprenants";

// $conn = mysqli_connect($localhost, $user, $password, $db);



// if (!$conn) {
//     die('Could not connect to the database');
// }






// // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// //     $email = $_POST['email'];
// //     $password = $_POST['mot_de_passe'];

// //     // Effectuer la vérification des informations d'identification ici
// //     // Si les informations d'identification sont correctes, vous pouvez utiliser une condition appropriée pour vérifier les valeurs

// //     if ($email == "maigasamira6@gmail.com" && $password == "1234") {
// //         $_SESSION['email'] = $email;
// //         $_SESSION['mot_de_passe'] = $password;
// //         header("Location: formulaire_d'inscription/index.php");
// //         exit();
// //     } else {
// //         header("Location: login.php?erreur=1");
// //         exit();
// //     }
// // }




// // Récupérer les valeurs du formulaire
// $email = $_POST['email'];
// $motDePasse = $_POST['mot_de_passe'];


// // Requête pour vérifier les informations d'identification
// $query = "SELECT * FROM administrateur WHERE email ='$email' AND mot_de_passe = '$motDePasse'";
// $stmt = mysqli_prepare($conn, $query);
// if ($stmt === false) {
//     die('Erreur de préparation de la requête : ' . mysqli_error($conn));
// }


// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);

// if (mysqli_num_rows($result) > 0) {
//     // Les informations d'identification sont correctes
//     // Effectuer d'autres opérations ici
//     //session_start();
//     //$_SESSION['message']= $administrateur;
    
//     $_SESSION['email']= $email;
//     $_SESSION['mot_de_passe'] = $password;
    
//     header("Location: index.php "); // Rediriger vers la page d'administration
//     exit();
// } else {
//           header("Location: login.php?erreur=1");
//            exit();
//         }
        

// // Vérifier si les champs email et mot_de_passe sont définis
// if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
//     $email = $_POST['email'];
//     $motDePasse = $_POST['mot_de_passe'];

//     // Requête pour récupérer l'administrateur avec l'email fourni
//     $query = "SELECT * FROM administrateur WHERE email = ?";
//     $stmt = mysqli_prepare($conn, $query);
//     if ($stmt === false) {
//         die('Erreur de préparation de la requête : ' . mysqli_error($conn));
//     }
//     mysqli_stmt_bind_param($stmt, 's', $email);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     // Vérifier si l'administrateur existe
//     if (mysqli_num_rows($result) > 0) {
//         $administrateur = mysqli_fetch_assoc($result);
//         $motDePasseHash = $administrateur['mot_de_passe'];

//         // Vérifier le mot de passe
//         if (password_verify($motDePasse, $motDePasseHash)) {
//             // Authentification réussie
//             session_start();
//             $_SESSION['message']= $administrateur;
//             header("Location: formulaire_d'inscription/index.php "); // Rediriger vers la page d'administration
//             exit();
//         } else {
//             // Mot de passe incorrect
//             $messageErreur = "Mot de passe incorrect";
//         }
//     } else {
//         // Administrateur non trouvé
//         $messageErreur = "Administrateur non trouvé";
//     }
// }

//Connexion à la base de données
// $localhost = '127.0.0.1';
// $user = 'root';
// $password ='';
// $db = "liste_des_apprenants";

// $conn=mysqli_connect($localhost,$user,$password,$db);

// if(!$conn){
//     die('could not connect to database');
// }
// echo 'connecter avec succès';

// // Vérifier si les champs email et mot_de_passe sont définis
// if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
//     $email = $_POST['email'];
//     $motDePasse = $_POST['mot_de_passe'];

//     // Requête pour récupérer l'administrateur avec l'email fourni
//     $query = "SELECT * FROM administrateur WHERE email = $email";
//     $stmt = $conn->prepare($query);
//     if ($stmt === false) {
//         die('Erreur de préparation de la requête : ' . $conn->error);
//     }
//     $stmt->bind_param('email',$email);
//     $stmt->execute();
//     $result = $stmt->get_result();

   

//     // Vérifier si l'administrateur existe
//     if ($result->num_rows > 0) {
//         $administrateur = $result->fetch_assoc();
//         $motDePasseHash = $administrateur['mot_de_passe'];

//         // Vérifier le mot de passe
//         if (password_verify($motDePasse, $motDePasseHash)) {
//             // Authentification réussie
//             session_start();
//             $_SESSION['administrateur'] = $administrateur;
//             header('Location: formulaire_d\'inscription/index.php'); // Rediriger vers la page d'administration
//             exit();
//         } else {
//             // Mot de passe incorrect
//             $messageErreur = "Mot de passe incorrect";
//         }
//     } else {
//         // Administrateur non trouvé
//         $messageErreur = "Administrateur non trouvé";
//     }
// }

// Fermer la connexion


// ...

// ...

// //Vérifier si les champs email et mot_de_passe sont définis
// if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
//     $email = $_POST['email'];
//     $motDePasse = $_POST['mot_de_passe'];

//     // Requête pour récupérer l'administrateur avec l'email fourni
//     $query = "SELECT * FROM administrateur WHERE email = '$email'";
//     $stmt = $dbh->prepare($query);
//     $stmt->bindParam('email', $email);
//     $stmt->execute();

//     // Vérifier si l'administrateur existe
//     if ($stmt->rowCount() > 0) {
//         $administrateur = $stmt->fetch(PDO::FETCH_ASSOC);
//         $motDePasseHash = $administrateur['mot_de_passe'];

//         // Vérifier le mot de passe
//         if (password_verify($motDePasse, $motDePasseHash)) {
//             // Authentification réussie
//             session_start();
//             $_SESSION['administrateur'] = $administrateur;
//             header('Location: formulaire_d\'inscription/index.php'); // Rediriger vers la page d'administration
//             exit();
//         } else {
//             // Mot de passe incorrect
//             $messageErreur = "Mot de passe incorrect";
//         }
//     } else {
//         // Administrateur non trouvé
//         $messageErreur = "Administrateur non trouvé";
//     }
// }

// ...


// $email = $_POST['email'];
// $password = $_POST['mot_de_passe'];

// $query = "SELECT COUNT(*) as total FROM administrateur";
// $result = mysqli_query($conn, $query);
// $row = mysqli_fetch_assoc($result);

// if ($row['total'] > 0) {
//     // Un administrateur existe déjà, afficher un message d'erreur
//     echo "Il ne peut y avoir qu'un seul administrateur dans le système.";
// } else {
//     // Insérer le nouvel administrateur dans la table
//     // ...
// }

// if(isset($email,$password ))
// {
    
   

//     if($query_run)
//     {
//         $_SESSION['message'] = "Succès";
//         header("Location: formulaire_d'inscription/index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Echec";
//         header("Location: formulaire_d'inscription/index.php ");
//         exit(0);
//     }
// }



// if(isset($_SESSION['email']) && isset($_POST['password']))
// {
//  // connexion à la base de données
//  $db_username = 'root';
//  $db_password = '';
//  $db_name = 'liste_des_apprenants';
//  $db_host = 'localhost';
//  $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
//  or die('could not connect to database');
 
//  // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
//  // pour éliminer toute attaque de type injection SQL et XSS
//  $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
//  $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot_de_passe']));
 
//  if($username !== "" && $password !== "")
//  {
//  $requete = "SELECT count(*) FROM administrateur where 
//  email = '".$username."' and mot_de_passe = '".$password."' ";
//  $exec_requete = mysqli_query($db,$requete);
//  $reponse = mysqli_fetch_array($exec_requete);
//  $count = $reponse['count(*)'];
//  if($count!=0) // nom d'utilisateur et mot de passe correctes
//  {
//  $_SESSION['email'] = $username;
//  header('Location: principale.php');
//  }
//  else
//  {
//  header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
//  }
//  }
//  else
//  {
//  header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
//  }
// }
// else
// {
//  header('Location: login.php');
// }
// mysqli_close($db); // fermer la connexion
?> -->