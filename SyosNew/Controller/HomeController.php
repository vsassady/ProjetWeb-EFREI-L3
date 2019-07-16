<?php

class HomeController
{
  function __construct()
  {
  }

  public function displayAbout()
  {
    include dirname(__DIR__).'/View/front/about.php';
  }

  public function index()
  {
    include dirname(__DIR__).'/View/front/home.php';
  }

  public function displayBoutique()
  {
    include dirname(__DIR__).'/View/front/boutique.php';
  }

  public function displayUser()
  {
    include dirname(__DIR__).'/View/front/user.php';
  }

  public function userHandle()
  {
    include dirname(__DIR__).'/View/front/userHandler.php';
  }
}
