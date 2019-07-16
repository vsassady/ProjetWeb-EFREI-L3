<?php

return [
    'dashboard/products' => [
        'controller' => 'ProductController',
        'action' => 'productsList',
    ],
    'connexion' => [
        'controller' => 'UserController',
        'action' => 'connect',
    ],
    'deconnexion' => [
        'controller' => 'UserController',
        'action' => 'deconnect',
    ],
    'register' => [
        'controller' => 'UserController',
        'action' => 'register',
    ],
    '' => [
      'controller' => 'HomeController',
      'action' => 'index',
    ],
    'about' => [
      'controller' => 'HomeController',
      'action' => 'displayAbout',
    ],
    'boutique' => [
      'controller' => 'HomeController',
      'action' => 'displayBoutique',
    ],
    'user' => [
      'controller' => 'HomeController',
      'action' => 'displayUser',
    ],
    'userHandler' => [
    'controller' => 'HomeController',
    'action' => 'userHandle',
    ]
];
