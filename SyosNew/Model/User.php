<?php

/**
 *
 */
class User extends Parametres_connexion
{

  function __construct()
  {
    parent::__construct();
  }

  public function connexion()
  {
    $query = "SELECT mail, mdp FROM utilisateurs";
    $prepQuery = $this->bdd->prepare($query);
    $prepQuery->execute();
    $data = $prepQuery->fetch(PDO::FETCH_ASSOC);

    if ($data['mail'] == $_POST['mail']) {
      if(password_verify($_POST['mdp'], $data['mdp'])){
        return true;
      }
      return false;
    }
    return false;
  }

  public function register()
  {
    if ($_POST['mdp'] === $_POST['mdp_verify']) {
      $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
      if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        if ($_POST['profil'] == 'Entreprise') {
            $query = "INSERT INTO utilisateurs (mdp, nom_entreprise, adresse_postale, telephone, mail, profil) VALUES (?,?,?,?,?,?)";
            $prepQuery = $this->bdd->prepare($query);
            $prepQuery->execute([$mdp, $_POST['nom_entreprise'], $_POST['adresse'], $_POST['phone'], $_POST['mail'], $_POST['profil']]);
        } else {
          $query = "INSERT INTO utilisateurs (mdp, nom_utilisateur, prenom_utilisateur, adresse_postale, telephone, mail, profil) VALUES (?,?,?,?,?,?,?)";
          $prepQuery = $this->bdd->prepare($query);
          $prepQuery->execute([$mdp, $_POST['nom_utilisateur'], $_POST['prenom_utilisateur'], $_POST['adresse'], $_POST['phone'], $_POST['mail'], $_POST['profil']]);
        }
      } else {
        throw new Exception('Email invalide.');
      }
    } else {
      throw new Exception('password inegaux.');
    }
  }
}
