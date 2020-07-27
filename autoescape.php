<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$twig = new Environment($loader, [
    'autoescape' => false
]);

$data = "<script src='http::/example.com/nastyscript.js'></script>";

echo $twig->render('autoescape.html.twig', ['data' => $data]);
