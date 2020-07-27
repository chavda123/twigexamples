<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$users = [ 
    ['name' => 'John Doe', 'active' => false],
    ['name' => 'Lucy Smith', 'active' => true],
    ['name' => 'Peter Holcombe', 'active' => false],
    ['name' => 'Barry Collins', 'active' => false]
];

echo $twig->render('activeusers.html.twig', ['users' => $users]);
