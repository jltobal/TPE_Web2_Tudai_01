<?php

require_once 'smarty/libs/Smarty.class.php';


class view
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function renderHome($allPrinters)  //Muestra Home
    {
        $this->smarty->assign('impresora', $allPrinters);
        $this->smarty->display('templates/home.tpl');
    }

    public function renderDetails($detalles)  //Arreglar mostrar detalles 
    {
        $this->smarty->assign('titulo', 'Detalles');
        $this->smarty->assign('impresora', $detalles);
        $this->smarty->display('templates/detalles.tpl');
    }

    public function renderFilter($Metodos)
    {
        $this->smarty->assign('titulo', 'Filtrar');
        $this->smarty->assign('metodo', $Metodos);
        $this->smarty->display('templates/filtrar.tpl');
    }
    public function renderFiltrado($impresoras, $filtro)
    {
        $this->smarty->assign('titulo', 'Filtrar');
        $this->smarty->assign('impresora', $impresoras);
        $this->smarty->assign('filtro', $filtro);
        $this->smarty->display('templates/filtrado.tpl');
    }

    public function renderAdmin($impresoras, $metodos)
    {
        $this->smarty->assign('titulo', 'Administrar');
        $this->smarty->assign('impresora', $impresoras);
        $this->smarty->assign('metodo', $metodos);
        $this->smarty->display('templates/administrar.tpl');
    }

    public function renderRegister()
    {
        $this->smarty->assign('titulo', 'Registrar');
        $this->smarty->display('templates/registrar.tpl');
    }

    public function renderLogin($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }


    public function refreshAdmin()
    {
        header('Location: ' . BASE_URL . 'administrar');
    }

    public function test()
    {
        $this->smarty->display('templates/metodo.tpl');
    }
}
