<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:52:02
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61661fa2c26693_48731263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd106420aacdd88a07cba5e789370c3c0a1c0d5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\detalles.tpl',
      1 => 1634082721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61661fa2c26693_48731263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table  class="list">

<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['impresora']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?> 
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->modelo;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->marca;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->descripcion;?>
</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 </tbody>   
 </table>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
