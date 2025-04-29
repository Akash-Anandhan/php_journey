<?php
require "functions.php";

$uri = $_SERVER['REQUEST_URI'];
$routes= [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php'
];
//if (key_exists($uri, $routes)){
//    require $routes[$uri];
//}
if($uri === '/'){
    require "controllers/index.php";
}
elseif($uri==='/about'){
    require "controllers/about.php";
}
elseif($uri==='/contact'){
    require "controllers/contact.php";
}