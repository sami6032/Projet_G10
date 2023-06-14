<?php
session_start();

// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Rediriger vers la page de connexion
    header("Location: login.php");
    exit();
}
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
  
    <title>Liste des apprenants</title>

    <style>
        /* Styles pour le menu latéral */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #f1f1f1;
            padding: 20px;
            transition: all 0.3s;
            z-index: 999;
        }

        .sidebar h2 {
            color: #000;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #000;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            color: #555;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #f1f1f1;
            position: fixed;
            left: -200px;
            transition: left 0.3s ease;
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }

        /* Ajoutez votre style CSS pour le bouton de menu ici */
        .menu-toggle {
            position: fixed;
            left: 20px;
            top: 20px;
            cursor: pointer;
            z-index: 999;
        }

        .menu-toggle .bar {
            width: 30px;
            height: 5px;
            background-color: #333;
            margin-bottom: 6px;
            transition: all 0.3s ease;
        }

        .menu-toggle.active .bar:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .menu-toggle.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Styles pour le contenu principal */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        /* Styles pour la version responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body style="background-color: #D90000;">
    <!-- Menu latéral -->
    <div class="sidebar" id="sidebar">
        <h2>Tableau de bord</h2>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Paramètres</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </div>
     <!-- Bouton de menu -->
     <div class="menu-toggle" id="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <div class="nave" style="background-color: #FAF9F7;">
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
                    <form method="POST" action="recherche.php" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="recherche" placeholder="recherche" aria-label="recherche">
                        <button class="btn btn-outline-success" type="submit"><img width="25px"
                                src="Images/icône_recherche-removebg-preview.png" alt=""></button>
                    </form> <br><br>
                    <form action="deconnexion.php"  method="POST" style="margin:30px; color:white;border-radius:10px;">
                        <input type="submit" value="Déconnexion">
                    </form>
                    <!-- <a href="../deconnexion.php">Deconnexion</a> -->

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
                <div class=""><a class="nav-link navtext active" aria-current="page" href="acceuil.php">A propos</a></div>
                <div class=""><a class="nav-link navtext active" href="php\apprenantCreate.php">Inscription</a></div>
                <div class=""><a class="nav-link navtext active" href="#">Liste des apprenants</a></div>

            </div>
        </div>
    </div>

    <div class="container mt-4">
        <?php include('./php/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>APPRENANTS D-CLIC:
                            <a href="./php/apprenantCreate.php" class="btn btn-primary float-end">AJOUTER UN APPRENANT</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>PRENOM</th>
                                    <th>DATE DE Naissance</th>
                                    <th> VILLE D'ORIGINE</th>
                                    <th> FORMATION DE BASE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                            <?php
                                            require_once 'connexion.php';
                                            $query = "SELECT * FROM apprenant ";
                                            $query_run = mysqli_query($conn, $query);

                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                                foreach($query_run as $appprenant)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?= $appprenant['id']; ?></td>
                                                        <td><?= $appprenant['nom']; ?></td>
                                                        <td><?= $appprenant['prenom']; ?></td>
                                                        <td><?= $appprenant['date_de_naissance']; ?></td>
                                                        <td><?= $appprenant['ville_origine']; ?></td>
                                                        <td><?= $appprenant['formation_de_base']; ?></td>
                                                        <td>
                                                            <a href="php/apprenantView.php?id=<?= $appprenant['id']; ?>" class="btn btn-info btn-sm">Afficher</a>
                                                            <a href="php/aprennantEdit.php?id=<?= $appprenant['id']; ?>" class="btn btn-success btn-sm">Modidier</a>
                                                            <form action="php/code.php" method="POST" class="d-inline">
                                                                <a href="#" onclick="confirmerSuppression(<?= $rows['id'] ?>)">
                                                                    <button type="submit" name="delete_apprenant" value="<?= $appprenant['id']; ?>" class="btn btn-danger btn-sm">Supprimer</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                echo "<h5> No Record Found </h5>";
                                            }
                                            ?>
                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    >
    <script>
        // Code JavaScript pour ouvrir/fermer le menu latéral
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
</body>
</html>
