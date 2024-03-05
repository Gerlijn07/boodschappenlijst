<?php


/* require 'functions.php'; */

// $database = require 'core/bootstrap.php';
require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require $router->direct($uri);


// $router = Router::load('routes.php');
// require $router->direct($uri);

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

 
/* $groceries = $query->selectAll('groceries'); */

/* var_dump($groceries); */


/* require "views\index.view.php"; */


/* dd($groceries); */


/* dd($groceries); */

/*
$groceries = [
    "brood" => [
        "productName" => "Brood",
        "price" => 1.59,
        "number" => 0
    ],
    "broccoli" => [
        "productName" => "Broccoli",
        "price" => 0.99,
        "number" => 1
    ],
    "krentebollen" => [
        "productName" => "Krentebollen",
        "price" => 2.19,
        "number" => 0
    ],
    "noten" => [
        "productName" => "Noten",
        "price" => 3.19,
        "number" => 2
    ],
];
*/



function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}



