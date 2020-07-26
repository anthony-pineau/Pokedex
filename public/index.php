<?php

require_once '../vendor/autoload.php';

require_once '../app/utils/Database.php';

require_once '../app/models/CoreModel.php';
require_once '../app/models/Pokemon_typeModel.php';
require_once '../app/models/PokemonModel.php';
require_once '../app/models/TypeModel.php';

require_once '../app/controllers/CoreController.php';
require_once '../app/controllers/MainController.php';
require_once '../app/controllers/DetailsController.php';

$router = new AltoRouter();
$basePath = $_SERVER['BASE_URI']; 
$router->setBasePath($basePath);

$router->map(
    'GET',
    '/',
    ['method' => 'home', 'controller' => 'MainController'],
    'homepage'
);

$router->map(
    'GET',
    '/list/[a:type]/',
    ['method' => 'list', 'controller' => 'MainController'],
    'list-page'
);

$router->map(
    'GET',
    '/types/',
    ['method' => 'types', 'controller' => 'MainController'],
    'types-page'
);


$router->map(
    'GET',
    '/details/[i:id]/',
    ['method' => 'details', 'controller' => 'DetailsController'],
    'details-page'
);

$match = $router->match(); 

if ($match === false) {
    header("HTTP/1.1 404 Not Found");
    exit('This page was not found');
}

$methodToUse = $match['target']['method'];
$controllerToUse = $match['target']['controller'];

$controller = new $controllerToUse($router);

$controller->$methodToUse($match['params']);
