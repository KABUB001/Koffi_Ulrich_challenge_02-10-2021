<?php
    require_once 'config.php';
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT username, email, password FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0)
        {
            if(strlen($username) <= 50 )
            {
                if(strlen($email) <= 50 )
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password_retype)
                        {
                            $password = hash('sha256', $password);
                            $ip = $_SERVER['REMOTE_ADDR'];

                            $insert = $bdd->prepare('INSERT INTO utilisateur(username, email, password, ip) VALUES(:username, :email, :password, :ip)');
                            $insert->execute(array(
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip
                            ));
                            header('Location:index.php');
                            header('Location:index.php?reg_err=success');
                            

                        }else header('Location:inscription.php?reg_err=password');

                    }else header('Location:inscription.php?reg_err=email');

                }else header('Location:inscription.php?reg_err=email_lenght');
            }else header('Location:inscription.php?reg_err=username_lenght');

        }else header('Location:inscription.php?reg_err=already');
    }

?>