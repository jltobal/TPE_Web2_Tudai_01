<?php
require_once './api/api.controller.php';



//$router = new Router();

$router->addRoute('turnos' , 'GET' , 'ApiController', 'getAllTurnos');
$router->addRoute('turnos/:ID' , 'GET' , 'ApiController', 'getTurnoByID');
$router->addRoute('profesionales' , 'POST' , 'ApiController', 'addProfesional');


$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);