<?php
session_start();
require_once '../connexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="formulaire.css">
<link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/main.css">

    <title>apprenant Create</title>
</head>

<body style= "background-color: #D90000;  "; >
<div class=" container-fluid header" style="background-color: #FAF9F7; height: 130px;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#"><img width="40%" src="Images/logo_dclic.png" class="logo_sup" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
              <strong class=" dclic ">PROGRAMME D-CLIC</strong>
            
          </ul>
          <a class="navbar-brand" href="#"><img width="30%" src="Images/burkina.png" class="logo_sup" alt=""></a>
          <div class="faozia1 ">
            <div class=""><a class="nav-link navtext active" aria-current="page" href="/index.html">A propos</a></div>
            <div class=""><a class="nav-link navtext active" href="/Inscription.html">Inscription</a></div>
            <div class=""><a class="nav-link navtext active" href="../index.php">Liste des apprenants</a></div>

          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid">

      <div class="faozia ">
        <div class=""><a class="nav-link navtext active" aria-current="page" href="../acceuil.php">A propos</a></div>
        <div class=""><a class="nav-link navtext active" href="/Inscription.html">Inscription</a></div>
        <div class=""><a class="nav-link navtext active" href="../index.php">Liste des apprenants</a></div>

      </div>
    </div>
  </div>

    <?php include('../php/message.php'); ?>
    

        <div class="row " style= "" >
            <div class="col-md-12 corppage ">
                <div class="card corpform">
                    <div class="card-header9">
                        <h4>Ajouter 
                            <a href="../index.php" class="btn  float-end"><strong>Retour</strong></a>
                        </h4>
                    </div>
                    <div class="card-body" style= "background-color: #D90000; " >
                        <form action="../php/code.php" method="POST">

                            <div class="mb-3 ff">
                                <!-- <label> Nom</label> -->
                                <input type="text" name="nom" required placeholder="Entrer votre nom" class="form-control w-50px text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Prenom</label> -->
                                <input type="text" name="prenom" placeholder="Entrer votre prenom" class="form-control text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Date De Naissance</label> -->
                                <input type="date" name="date_de_naissance" placeholder="Entrer votre date de naissance" class="form-control text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Ville d'Origine</label> -->
                                <input type="text" name="ville_origine" placeholder="Entrer votre ville d'origine" class="form-control text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Formation de Base </label> -->
                                <input type="text" name="formation_de_base" placeholder="Entrer votre formation de base" class="form-control text-center">
                            </div>
                           
                            <div class="mb-3 text-center ">
                                <button type="submit" class="btn btn-light text-center" >ENVOYEZ</button>
                            </div>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>