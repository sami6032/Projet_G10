<?php
require '../connexion.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/main.css">
   

    <title>Apprenant View</title>
</head>
<body style= "background-color: #D90000; ";>
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
            <a class="nav-link active dclic " href="#" role="button" aria-expanded="false">
              <strong>PROGRAMME D-CLIC</strong>
            </a>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="recherche" placeholder="recherche" aria-label="recherche">
            <button class="btn btn-outline-success" type="submit"><img width="25px"
                src="Images/icône_recherche-removebg-preview.png" alt=""></button>
          </form> <br>
          <div class="faozia1 ">
            <div class=""><a class="nav-link navtext active" aria-current="page" href="/index.html">A propos</a></div>
            <div class=""><a class="nav-link navtext active" href="/Inscription.html">Inscription</a></div>
            <div class=""><a class="nav-link navtext active" href="#">Liste des apprenants</a></div>

          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid">

      <div class="faozia ">
        <div class=""><a class="nav-link navtext active" aria-current="page" href="/index.html">A propos</a></div>
        <div class=""><a class="nav-link navtext active" href="/Inscription.html">Inscription</a></div>
        <div class=""><a class="nav-link navtext active" href="#">Liste des apprenants</a></div>

      </div>
    </div>
  </div>








    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Apprenant 
                            <a href="../index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $apprenant_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM apprenant WHERE id='$apprenant_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $apprenant = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Nom</label>
                                        <p class="form-control">
                                            <?=$apprenant['nom'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Prenom</label>
                                        <p class="form-control">
                                            <?=$apprenant['prenom'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date de Naissance</label>
                                        <p class="form-control">
                                            <?=$apprenant['date_de_naissance'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ville d'origine</label>
                                        <p class="form-control">
                                            <?=$apprenant['ville_origine'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Formation de base</label>
                                        <p class="form-control">
                                            <?=$apprenant['formation_de_base'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>