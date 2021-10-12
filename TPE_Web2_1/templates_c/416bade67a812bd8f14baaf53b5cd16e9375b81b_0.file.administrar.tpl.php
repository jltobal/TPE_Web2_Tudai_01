<?php
/* Smarty version 3.1.39, created on 2021-10-12 22:57:53
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\administrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165f6d180cb93_11188344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '416bade67a812bd8f14baaf53b5cd16e9375b81b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\administrar.tpl',
      1 => 1634017367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6165f6d180cb93_11188344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Administrar impresoras</h3>

<form>
<label>Marca</label>
<input type="text" name="marca" placeholder="Canon">
<label>Modelo</label>
<input type="text" name="modelo" placeholder="TX135">
<label>Metodo</label>
<input type="text" name="metodo" placeholder="Laser monocromo">
<label>Detalles</label>
<input type="text" name="detalles" placeholder="Tamaño A4, 600dpi...">
 <a href="agregar/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_impresora;?>
">Agregar</a>


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
        <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_impresora;?>
">Editar</a></td>
        <td><a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_impresora;?>
">Eliminar</a></td>

    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 </tbody>   
 </table>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
