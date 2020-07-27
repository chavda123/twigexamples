<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);


$name = "John Doe";
$age = 34;
        
echo $twig->render('formatfil.html.twig', ['name' => $name, 'age' => $age]);
