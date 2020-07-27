<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$words = ['sky', 'mountain', 'falcon', 'forest', 
    'rock', 'blue', 'solid', 'book', 'tree'];

echo $twig->render('words.html.twig', ['words' => $words]);
