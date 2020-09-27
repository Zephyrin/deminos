<?php
session_start();

if (isset($_GET['click']) and $_GET['click'] == 'disconnect') {
    $_SESSION = array();
    session_destroy();

}

require 'src/controller/Home.php';
require 'src/controller/Morpion.php';


require 'src/model/Players.php';

$page = filter_input(INPUT_GET, 'page');

//var_dump($page);

// Liste des Class pour chaque Page
$route = array(
    'home' => Home::class,
    'morpion' => Morpion::class,

);

if (isset($_SESSION['players'])){
    foreach ($route as $routeValue => $className) {

        if ($page === $routeValue) {

            $controller = new $className;
            $controller->manage();
            break;
        }

    }
}

if (!isset($controller)) {
    // ERROR 404
    $controller = new Home();
    $controller->manage();
}

