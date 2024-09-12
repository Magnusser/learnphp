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

// require_once 'src/Router.php';
// require_once 'src/DB.php';

use App\Controllers\PublicController as PC;

$router = new App\Router();
$db = new App\DB();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
dump($router, $db, $controller);
// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $posts = [
//             ['title' => 'Some title 1', 'body' => 'Some body 1'],
//             ['title' => 'Some title 2', 'body' => 'Some body 2'],
//             ['title' => 'Some title 3', 'body' => 'Some body 3'],
//             ['title' => 'Some title 4', 'body' => 'Some body 4'],
//         ];
//         include 'views/index.php';
//         break;
//     case '/us':
//         $posts = [
//             ['title' => 'Some us title 1', 'body' => 'Some us body 1'],
//             ['title' => 'Some us title 2', 'body' => 'Some us body 2'],
//             ['title' => 'Some us title 3', 'body' => 'Some us body 3'],
//             ['title' => 'Some us title 4', 'body' => 'Some us body 4'],
//         ];
//         include 'views/us.php';
//         break;
//     case '/tech':
//         $posts = [
//             ['title' => 'Some tech title 1', 'body' => 'Some tech body 1'],
//             ['title' => 'Some tech title 2', 'body' => 'Some tech body 2'],
//             ['title' => 'Some tech title 3', 'body' => 'Some tech body 3'],
//             ['title' => 'Some tech title 4', 'body' => 'Some tech body 4'],
//         ];
//         include 'views/tech.php';
//         break;
//     default:
//         echo 'ERROR 404!';
// }