<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:30:35
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\filtrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616628ab1b38f3_28219829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534a7af8a839e3fc6e3a3969eca1c1c81452f4be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\filtrado.tpl',
      1 => 1634085028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616628ab1b38f3_28219829 (Smarty_Internal_Template $_smarty_tpl) {
?><table  class="list">
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['impresora']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>               
    <?php if ($_smarty_tpl->tpl_vars['filtro']->value == $_smarty_tpl->tpl_vars['info']->value->metodo) {?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['info']->value->modelo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['info']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
</td>
        </tr>
    <?php }?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>   
 </table>
<?php }
}
