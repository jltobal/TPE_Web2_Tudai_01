<?php

require_once 'authhelper.php';

class controller
{

    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->view = new view();   //al atributo le instacio la clase View del View.php
        $this->model = new model();
        $this->authHelper = new AuthHelper();
    }

    function showHome()
    {
        $allPrinters = $this->model->getAllPrinters(); //llamas a la base de datos.
        $this->view->renderHome($allPrinters); //paso por parametro la canidad.
    }

    function showModels()
    {
        $impresoras = $this->model->getAllPrinters(); //llamas a la base de datos.
        $this->view->renderModels($impresoras); //paso por parametro la canidad.
    }

    function showDetails($id)
    {
        $detalles = $this->model->getPrinterByID($id); //llamo por id a la db.
        $this->view->renderDetails($detalles);          //tipo, modelo, dpi, toner, tinta.
    }

    function showFilter()
    {
        $Metodos = $this->model->getAllMetodos();
        $this->view->renderFilter($Metodos);         //quiero impresoras laser color.
    }
    function showFiltrado($filtro)
    {
        $impresoras = $this->model->getAllPrinters();
        $this->view->renderFiltrado($impresoras, $filtro);
    }


    /* --------- Administracion de Metodos ----------*/
    function agregarMetodo()
    {
        $this->model->createMetodo();
        $this->view->refreshAdmin();
    }
    function editMetodo()
    {
        $id = $_POST['id_metodo'];
        $newMetodo = $_POST['input_metodo'];
        $this->model->editarMetodo($id, $newMetodo);
        $this->view->refreshAdmin(); 
    }
    function deleteMetodo($id)
    {
        $ImpresoraID = $this->model->getPrinterByMetodo($id); //llamo por id a la db.
        if (!empty($ImpresoraID)) {
            $this->view->refreshAdmin();
        } else {
            $this->model->deleteMetodoByID($id); //llamo por id a la db.
            $this->view->refreshAdmin();
        }
    }

    /*------------  Registro y Vista Admin ----------*/

    function showAdmin()
    {
        $this->authHelper->checkLoggedIn();
        $impresoras = $this->model->getAllPrinters();
        $metodos = $this->model->getAllMetodos();
        $this->view->renderAdmin($impresoras, $metodos);                 //agregar, borrar, editar.
    }
    function showRegister()
    {
        $this->view->renderRegister();
        if (!empty($_POST['email']) && !empty($_POST['password'])) {  //Verifico si los campos estan vacios o no.
            $userEmail = $_POST['email'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->registerUser($userEmail, $userPassword);
        }
    }

    /*---------------- Administrar Impresoras ------------------- */

    function agregarImpresora()
    {
        $marca = $_REQUEST['marca'];
        $modelo = $_REQUEST['modelo'];
        $descripcion = $_REQUEST['descripcion'];
        $metodo = $_REQUEST['select_metodo'];
        $this->model->createImpresora($marca, $modelo, $descripcion, $metodo);
        $this->view->refreshAdmin();
    }

    function editarImpresora(){
        $id_impresora = $_REQUEST['id_impresora'];
        $marca = $_REQUEST['marca'];
        $modelo = $_REQUEST['modelo'];
        $descripcion = $_REQUEST['descripcion'];
        $metodo = $_REQUEST['select_metodo'];
     #   var_dump($_REQUEST);
        $this->model->editImpresora($id_impresora, $marca, $modelo, $descripcion, $metodo);
        $this->view->refreshAdmin();

    }

    function eliminarImpresora($id){
        var_dump($id); 
        $this->model->deleteImpresoraByID($id);
        $this->view->refreshAdmin(); 
    }
}
