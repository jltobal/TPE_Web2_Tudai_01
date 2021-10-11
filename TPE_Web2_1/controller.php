<?php

class controller
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new view();   //al atributo le instacio la clase View del View.php
        $this->model = new model();
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
        $detalles = $this->model->getPtinterByID($id); //llamo por id a la db.
        $this->view->renderDetails($detalles);          //tipo, modelo, dpi, toner, tinta.
    }

    function showFilter($filtro)
    {
        $impresoras = $this->model->getPtinterByFilter($filtro); //llamo por x filtro.
        $this->view->renderFilter($impresoras);               //quiero impresoras laser color.
    }

    function showAdmin()
    {
        $impresoras = $this->model->getAllPrinters('Null');
        $this->view->renderAdmin($impresoras);                 //agregar, borrar, editar.
    }

    function showRegister()
    {
        $this->view->renderRegister();
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $userEmail = $_POST['email'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->registerUser($userEmail, $userPassword);
        }
    }

    function showCategorias()
    {

    }

    function addPrinter(){

    }

    function deletePrinter(){
        
    }
}
