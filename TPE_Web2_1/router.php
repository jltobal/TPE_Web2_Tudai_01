<?php

require_once 'controller.php';
require_once 'model.php';
require_once 'view.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$controlador = new Controller(); //creo un objeto o instacia de la clase Controller


switch ($params[0]) {
    case 'home':
        $controlador->showModelos('home'); //mostramos 6.
        break;
    case 'modelos':
        $controlador->showModelos('all');  //mostrar todo.
        break;
    case 'detalle':
        $controlador->showDetalle($params[1]);  //muestra descripcion.
        break;
    case 'filtrar':
        $controlador->filtrarImpresora($params[1]);  //filtro por marca o sistema.
        break;
    case 'administrar':
        $controlador->administrarImpresoras();  //Agregar, editar, borrar.
        break;
    default:
        $controlador->showModelos('home');;
        break;
}
