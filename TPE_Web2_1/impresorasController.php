<?php

class impresorasController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new view();   //al atributo le instacio la clase View del View.php
        $this->model = new model();
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

    function editarImpresora()
    {
        $id_impresora = $_REQUEST['id_impresora'];
        $marca = $_REQUEST['marca'];
        $modelo = $_REQUEST['modelo'];
        $descripcion = $_REQUEST['descripcion'];
        $metodo = $_REQUEST['select_metodo'];
        #   var_dump($_REQUEST);
        $this->model->editImpresora($id_impresora, $marca, $modelo, $descripcion, $metodo);
        $this->view->refreshAdmin();
    }

    function eliminarImpresora($id)
    {
        var_dump($id);
        $this->model->deleteImpresoraByID($id);
        $this->view->refreshAdmin();
    }
}
