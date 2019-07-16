<?php
  class Parametres_connexion
  {
    protected $host;
    protected $dbname;
    protected $user;
    protected $password;
    protected $bdd;

    function __construct()
    {
      $this->host = 'localhost';
      $this->dbname = 'syos';
      $this->user = 'root';
      $this->password = 'root';

      try {
        $this->bdd = new PDO("mysql:host=$this->host; dbname=$this->dbname;
        ", $this->user,$this->password);
      } catch (PDOException $e) {
        echo "Erreur : ".$e->getMessage()."<br/>";
        die();
      }
    }
  }
?>
