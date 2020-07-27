<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);


$user = ['name' => 'John Doe', 'created_at' => '2011/11/10'];

echo $twig->render('datefun.html.twig', ['user' => $user]);
