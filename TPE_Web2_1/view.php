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

    public function renderHome($allPrinters)  //Muestra Home
    {
        $this->smarty->assign('impresora', $allPrinters);
        $this->smarty->display('templates/home.tpl');
    }

    public function renderModels($impresoras) //Muestra todo
    {
        $this->smarty->assign('impresora', $impresoras);
        $this->smarty->display('templates/listadomodelos.tpl');
    }

    public function renderDetails($detalles)  //Arreglar mostrar detalles 
    {
        $this->smarty->assign('titulo', 'Detalles');
        $this->smarty->assign('impresora', $detalles);
        $this->smarty->display('templates/detalles.tpl');
    }

    public function renderFilter($filtro)
    {
    }

    public function renderAdmin()
    {
    }

    public function RenderRegister(){
        
    }
}
