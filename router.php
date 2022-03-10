<?php

require_once './controllers/authcontroller.php';
require_once './controllers/controller.php';
require_once './models/turnomodel.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$helper = new Authcontroller();
$authcontroller = new Authcontroller();


switch ($params[0]){
    case 'home':
        $controller->showHome();
        break;
    case 'login':
        $controller->showLogin();
        break;
    case 'verturnos':
        $controller->showTurnos();
        break;
    case 'administrar':
        $controller->showAdministracion();
        break;
    case 'administrarturnos':
        $controller->ShowAdminTurnos();
        break;
    case 'filtrarturnos':
        $authcontroller = new Authcontroller();
        $controller->filtrarTurnos($params[1]); //envio el tipo de especialidad por parametro
        break;
    case 'eliminarespecialidad':
        $authcontroller = new Authcontroller();
        $controller->eliminarEspecialidad($params[1]); //envio la especialidad por parametro

    }