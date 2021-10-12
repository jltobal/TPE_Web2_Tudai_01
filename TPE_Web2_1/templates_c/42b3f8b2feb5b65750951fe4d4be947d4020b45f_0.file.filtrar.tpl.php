<?php
/* Smarty version 3.1.39, created on 2021-10-13 00:47:27
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\filtrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166107fe9cf65_39229050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b3f8b2feb5b65750951fe4d4be947d4020b45f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\filtrar.tpl',
      1 => 1634078814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6166107fe9cf65_39229050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<h3>Seleccione el tipo de impresora</h3>
<br>

<form>
    <div class="form-group">
        <label>Sistema</label>
            <select name="select" id="selectMetodo" placeholder="seleccione metodo">
                <option value='Laser monocromo'>Laser</option>
                <option value='Color'>Tinta</option>
                <option value='Tinta color'>Matriz de punto</option>
                <option value='portable'>Portatiles</option>
                <option value='fiscal'>Fiscales</option>
    </form>
   </select>

    </div>
    

    <div id="ajax-contenedor">
    
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
