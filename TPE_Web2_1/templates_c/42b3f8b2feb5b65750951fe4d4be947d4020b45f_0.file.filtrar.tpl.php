<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:30:33
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\filtrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616628a9d674b7_28576646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b3f8b2feb5b65750951fe4d4be947d4020b45f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\filtrar.tpl',
      1 => 1634084309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616628a9d674b7_28576646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<h3>Seleccione el tipo de impresora</h3>
<br>

<form>
    <div class="form-group">
        <label>Sistema</label>
            <select name="select" id="selectMetodo" placeholder="seleccione metodo">
              
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['impresora']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>               
              <option name="<?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </form>
   </select>

    </div>
    

    <div id="ajax-contenedor">
    
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
