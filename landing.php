<?php
    session_start();
    if(!isset($_SESSION['user']))
    header('Location:index.php')

 ?>   
<!Doctype html>
  <html lang="eng">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet" href="css/bootstrap.min.css">
          <title>Landing</title>
      </head>
      <body>
          <h1>Bonjour! <?php echo $_SESSION['user']; ?></h1>
          <div class="container">
         <form method="POST" action="connexion1.php">
             <h2>Renseignements</h2>
             <input type="text" placeholder="Nom..." required name="nom"><br/>
             <input type="text" placeholder="Prenoms..." required name="prenom"><br/>
             <input type="date" placeholder="Date de naissance..." required name="date_de_naissance"><br/>
             <input type="text" placeholder="Numéro AEJ" required name="numero_aej"><br/>
             <input type="tel" placeholder="Numéro de téléphone..." required name="tel"><br/>
             <input type="email" placeholder="Email..." required name="mail"><br/>
             <select name="groupe">
                 <option value="1"> Groupe 1</option>
                 <option value="2">Groupe 2</option>
                 <option value="3">Groupe 3</option>
             </select>
             <select name="specialite">
                 <option value="DATA/IA">Développeur DATA/IA</option>
                 <option value="DEV WEB/MOB"> Développeur Web/Mobile</option>
                 <option value="REF DIG">Référent digital</option>
             </select>   
             <span id="b">Femme</span><input type="radio" name="sexe" value="F" required> <input type="radio" name="sexe" value="M" required><span id="b">Homme</span><br/>
             <input type="text" placeholder="Pseudonyme" required name="pseudo"><br/>
             <input type="password" placeholder="Mot de pass" required name="pass"><br/>
             <button type="submit" value="Ajouter">Entrer</button>
         </form>    
         </div>
          <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a><a href="lister.php" class="btn btn-primary btn-lg">Afficher</a>
      </body>
  </html>      