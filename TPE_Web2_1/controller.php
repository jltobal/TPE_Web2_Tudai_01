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
        $impresoras = $this->model->getAllPrinters();
        $this->view->renderFilter($impresoras);         //quiero impresoras laser color.
    }
    function showFiltrado($filtro){
        $impresoras = $this->model->getAllPrinters();
        $this->view->renderFiltrado($impresoras, $filtro);
    }

    function showAdmin()
    {
        $this->authHelper->checkLoggedIn();
        $impresoras = $this->model->getAllPrinters();
        $this->view->renderAdmin($impresoras);                 //agregar, borrar, editar.
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

    function showCategorias()
    {
    }

    function addPrinter()
    {
    }

    function deletePrinter()
    {
    }

    function editPrinter()
    {
    }
}
