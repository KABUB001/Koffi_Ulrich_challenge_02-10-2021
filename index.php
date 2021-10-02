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
                   if(isset($_GET['login_err']))
                   {
                       $err = htmlspecialchars($_GET['login_err']);

                       switch($err)
                       {
                            case 'password':
                            ?>
                            <section class="alert alert-danger">
                                <strong>Erreur</strong> mot de pass incorrect
                            </section>
                            <?php
                            break;

                            case 'email':
                            ?>
                            <section class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </section>
                            <?php
                            break;

                            case 'already':
                            ?>
                            <section class="alert alert-danger">
                            <strong>Erreur</strong> compte non existant
                            </section>
                            <?php
                            break;
                           

                       }
                   }
                  ?>
              <form action="connexion.php" method="post">
                  <h2 class="text-center">Connexion</h2>
                  <section class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                  </section>
                  <section class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Mot de pass" required="required" autocomplete="off">
                  </section>
                  <section class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                  </section>
              </form>
              <p class="text-center">pas encore inscrit?<br/><a href="inscription.php">S'inscrire</a></p>

          </section>
         
              
      </body>
  </html>