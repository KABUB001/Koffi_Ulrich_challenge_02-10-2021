<?php

try
{
	$objetPdo = new PDO('mysql:host=localhost;dbname=coordonnes;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$pdoStat = $objetPdo->prepare('SELECT * FROM donnees');

$executeIsOk = $pdoStat->execute();



$Donnees = $pdoStat->fetchAll();
?>

<!Doctype html>
  <html lang="eng">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet" href="css/bootstrap.min.css">
          <title>Liste</title>
      </head>
      <body>
          <h1>Listes des étudiants</h1>
          <ul>
              <?php foreach ($Donnees as $etudiant): ?>
                <li>
                    <?= $etudiant['nom'] ?> <?= $etudiant['prenom'] ?> - <?= $etudiant['date_de_naissance'] ?> - <?= $etudiant['sexe'] ?> - <?= $etudiant['groupe'] ?> - <?= $etudiant['specialite'] ?>
                </li> 
               <?php endforeach; ?> 
          </ul>
     </body>
  </html>