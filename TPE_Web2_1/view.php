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

    public function mostrarImpresoras($impresoras, $case)
    {
        if ($case == 'home') {
            //mOSTRAR 6
        } else if ($case == 'All') {
            $this->smarty->assign('impresora', $impresoras);
            $this->smarty->display('templates/header.tpl');
        }
    }

    public function mostrarDetalles($detalles)
    {
        $this->smarty->assign('titulo', 'Detalles');
        $this->smarty->assign('impresora', $detalles);
        $this->smarty->display('templates/header.tpl');
    }

    public function mostrarFiltro($filtro)
    {
    }

    public function administrar()
    {
    }
}
