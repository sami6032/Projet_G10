
<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->

 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Email</b></label>
 <input class="email" type="email" placeholder="Entrer votre email" name="email" required>

 <label><b>Mot de passe</b></label>
 <input  type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>
 <!--form action="formulaire_d'inscription/index.php"  method="POST" style="margin:30px; color:white;border-radius:10px;">
  <input type="submit" value="LOGIN">
</form-->

 <input  type="submit" id='submit' value='LOGIN' >
 
 <!--button action="../formulaire_d'inscription/index.php" type="submit" id='submit'>LOGIN</button-->
 
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 
 ?>
 
 </form>
 </div>
 </body>
</html>