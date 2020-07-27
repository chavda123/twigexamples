<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);


$words = ['', null, 'rock', '   ', 'forest'];
echo $twig->render('tests.html.twig', ['words' => $words]);
