<?php

require_once 'controller.php';
require_once 'metodoController.php';
require_once 'impresorasController.php';
require_once 'authcontroller.php';
require_once 'model.php';
require_once 'view.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$controlador = new controller(); //creo un objeto o instacia de la clase Controller
$controladorMetodo = new metodoController();
$controladorImpresoras = new impresorasController();

switch ($params[0]) {
    case 'home':
        $controlador->showHome(); 
        break;
    case 'detalle':
        $controlador->showDetails($params[1]);  
        break;
    case 'filtrar':
        $controlador->showFilter();
        break;
    case 'filtrado':
        $controlador->showFiltrado($params[1]);
        break;
        /*------------ Cuentas y Administracion ---------*/
    case 'registrar':
        $controlador->showRegister();
        break;
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    case 'verify':
        $authController = new AuthController();  //Verificar Sesion.
        $authController->login();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->showLogout();
        break;
    case 'administrar':
        $authController = new AuthController();
        $controlador->showAdmin();  //Administracion (Agregar, eliminar, editar, etc.).
        break;

        /*--------- Administrar Impresoras -------------*/
    case 'agregar_impresora':
        $controladorImpresoras->agregarImpresora();
        break;
    case 'editar_impresora':
        $controladorImpresoras->editarImpresora();
        break;
    case 'eliminar_impresora':
        $controladorImpresoras->eliminarImpresora($params[1]);
        break;
        /*---------  Administrar Metodos ----------------*/
    case 'agregar_metodo':
        $controladorMetodo->agregarMetodo();
        break;
    case 'eliminar_metodo':
        $controladorMetodo->deleteMetodo($params[1]);
        break;
    case 'editar_metodo':
        $controladorMetodo->editMetodo();
        break;
    default:
        $controlador->showHome();  //Por defecto va al Home.
        break;
}
