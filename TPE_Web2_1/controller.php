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

    function showModelos()
    {
        $impresoras = $this->model->obtenerTodo(); //llamas a la base de datos.
        $this->view->mostrarImpresoras($impresoras); //paso por parametro la canidad.
    }

    function showHome()
    {
        $impresoras = $this->model->obtenerTodo(); //llamas a la base de datos.
        $this->view->mostrarHome($impresoras); //paso por parametro la canidad.
    }

    function showDetalle($id)
    {
        $detalles = $this->model->obtenerImpresoraID($id); //llamo por id a la db.
        $this->view->mostrarDetalles($detalles);          //tipo, modelo, dpi, toner, tinta.
    }

    function filtrarImpresora($filtro)
    {
        $impresoras = $this->model->filtrarImpresora($filtro); //llamo por x filtro.
        $this->view->mostrarFiltro($impresoras);               //quiero impresoras laser color.
    }

    function administrarImpresoras()
    {
        $impresoras = $this->model->obtenerTodo('Null');
        $this->view->administrar($impresoras);                 //agregar, borrar, editar.
    }
}
