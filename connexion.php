<?php
   session_start();
   require_once 'config.php';

   if(isset($_POST['email']) && isset($_POST['password']))
   {
       $email = htmlspecialchars($_POST['email']);
       $password = htmlspecialchars($_POST['password']);}

      /* $check = $bdd->prepare('SELECT username, email, password FROM utilisateur WHERE email = ?');
       $check->execute(array($email));
       $data = $check->fetch();
       $row = $check->rowCount();

       if($row == 1)
       {
           if(filter_var($email, FILTER_VALIDATE_EMAIL))
           {
               $password = hash('sha256', $password);

               if($data['password'] == $password)
               {
                   $_SESSION['user'] = $data['username']; 
                   header('Location:landing.php');

               }else header('Location:index.php?login_err=password');

           }else header('Location:index.php?login_err=email');

       }else header('Location:index.php?login_err=already'); 

   }else header('Location:index.php');*/
// Hachage du mot de passe
$pass_hache = sha1($_POST['password']);
// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM utilisateur WHERE username = :username
AND password = :password');
$req->execute(array(
'username' => $username,
'password' => $pass_hache));
$resultat = $req->fetch();
if (!$resultat)
{
echo 'Mauvais identifiant ou mot de passe !';
}
else
{
session_start();
$_SESSION['id'] = $resultat['id'];
$_SESSION['pseudo'] = $pseudo;
echo 'Vous êtes connecté !';
}
?>