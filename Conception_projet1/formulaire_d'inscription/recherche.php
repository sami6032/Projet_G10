


<?php
$recherche = $_POST['recherche'];
?> 

<?php
    session_start();
    require_once 'connexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Resultat</title>
</head>
<body  style= "background-color: #D90000;  ";>
   
    <div class="container mt-4">
    

        <?php include('./php/message.php'); ?>
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       
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
                            <body>
                                <?php 
                                 
                                    $query = "SELECT * FROM apprenant WHERE nom LIKE '%$recherche%' OR prenom LIKE '%$recherche%'  OR date_de_naissance LIKE '%$recherche%'";
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
                                                        <button type="submit" name="delete_apprenant" value="<?=$appprenant['id']; ?>" class="btn btn-danger btn-sm">Supprimer</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>                         