<?php

/**
 *
 */
class UserController
{

  private $modele;

  function __construct()
  {
      $this->modele = new User();
  }

  public function connect()
  {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      try {
        $this->modele->connexion();
        // if(!$this->modele->connexion())
        // {
        //   echo
        //header('Location:  http://localhost/Projets/SyosNew/public/index.php/connexion');
        // }
        $_SESSION['email'] = $_POST['mail'];
        header('Location: http://localhost/Projets/SyosNew/public/index.php/user');
      } catch (Throwable $e) {
        header('Location:  http://localhost/Projets/SyosNew/public/index.php/connexion');
      }
    }
    else {
      include dirname(__DIR__).'/View/front/login.php';
    }
  }

  public function register()
  {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      try {
        $this->modele->register();
        $_SESSION['email'] = $_POST['mail'];
        $_SESSION['nom'] = $_POST['nom_utilisateur'];
        header('Location: http://localhost/Projets/SyosNew/public/index.php/user');
      } catch (Throwable $e) {
        var_dump($e->getMessage());
        header('Location:  http://localhost/Projets/SyosNew/public/index.php/register');
      }
    } else {
      include dirname(__DIR__).'/View/front/signup.php';

    }
  }

  public static function isConnected()
  {
    return isset($_SESSION['mail']);
  }
}
