<?php
// include_once 'header.php';   //base_url
// include_once 'footer.php';
require_once 'smarty/libs/Smarty.class.php';


class view
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function mostrarImpresoras($impresoras) //Muestra todo
    {
        $this->smarty->assign('impresora', $impresoras);
        $this->smarty->display('templates/listadomodelos.tpl');
    }

    public function mostrarHome($impresoras)  //Muestra Home
    {
        $this->smarty->assign('impresora', $impresoras);
        $this->smarty->display('templates/home.tpl');
    }

    public function mostrarDetalles($detalles)  //Arreglar mostrar detalles 
    {
        $this->smarty->assign('titulo', 'Detalles');
        $this->smarty->assign('impresora', $detalles);
        $this->smarty->display('templates/detalles.tpl');
    }

    public function mostrarFiltro($filtro)
    {
    }

    public function administrar()
    {
    }
}
