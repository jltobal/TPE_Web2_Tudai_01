<?php
/* Smarty version 3.1.39, created on 2021-10-10 00:11:00
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\listadomodelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616213745c6ec5_84192059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a838b9b1916c3fe89868a3b1f78b457b5a23d649' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\listadomodelos.tpl',
      1 => 1633817458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616213745c6ec5_84192059 (Smarty_Internal_Template $_smarty_tpl) {
?><a href='filtrar'>Filtrar</a>
<table  class="list">

<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['impresora']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?> 
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->tipo;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->modelo;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->Marca;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->descripcion;?>
</td>
    <td><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_impresora;?>
">Detalles</a></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 </tbody>   
 </table><?php }
}
