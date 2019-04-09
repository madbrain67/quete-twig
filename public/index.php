<?php


require 'vendor/autoload.php';

// Twig Configuration
$loader = new Twig_Loader_Filesystem('src/View');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('index.html.twig', [
    'products' => $products,
]);
