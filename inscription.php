<!Doctype html>
  <html lang="eng">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">

          <title>Connexion</title>
      </head>
      <body>
          <section class="login-form">
          <?php
                   if(isset($_GET['reg_err']))
                   {
                       $err = htmlspecialchars($_GET['reg_err']);

                       switch($err)
                       {
                            case 'success':
                            ?>
                            <section class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </section>
                            <?php
                            break;

                            case 'password':
                            ?>
                            <section class="alert alert-danger">
                                <strong>Erreur</strong> mot de pass différent
                            </section>
                            <?php
                            break;

                            case 'email':
                            ?>
                            <section class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </section>
                            <?php
                            break;

                            case 'email_lenght':
                            ?>
                            <section class="alert alert-danger">
                            <strong>Erreur</strong> email trop long
                            </section>
                            <?php
                            break;

                            case 'username_lenght':
                            ?>
                            <section class="alert alert-danger">
                            <strong>Erreur</strong> username trop long
                            </section>
                            <?php
                            break;

                            case 'already':
                            ?>
                            <section class="alert alert-danger">
                            <strong>Erreur</strong> compte existant
                            </section>
                            <?php
                            break;
                           

                       }
                   }
                   ?>
              <form action="inscription_traitement.php" method="post">
                  <h2 class="text-center">Inscription</h2>
                  <section class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur" required="required" autocomplete="off">
                  </section>
                  <section class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                  </section>
                  <section class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Mot de pass" required="required" autocomplete="off">
                  </section>
                  <section class="form-group">
                      <input type="password" name="password_retype" class="form-control" placeholder="Entrez le mot de pass de nouveau" required="required" autocomplete="off">
                  </section>
                  <section class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                  </section>
              </form>
              <p class="text-center">Déjà inscrit?<br/><a href="inscription.php">Se connecter</a></p>

          </section>
      
              
      </body>
  </html>