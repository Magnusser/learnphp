<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$vars){
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';   
}

spl_autoload_register(function($class){
    $class = substr($class, 4);
    dump($class);
    require_once "src/$class.php";
});

require 'routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    call_user_func($match['action']);
}