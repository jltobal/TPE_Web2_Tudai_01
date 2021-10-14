<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:00:20
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\administrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61677314169415_38242892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '416bade67a812bd8f14baaf53b5cd16e9375b81b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\administrar.tpl',
      1 => 1634169575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61677314169415_38242892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Administrar Metodos</h3>

<div>
    <form method="POST" action="agregar_metodo">
        <label>Ingrese metodo a ingresar o editar</label>
        <input type="text" name="input_metodo">
        <button type="submit">Agregar</button>

        
    </form>
    <form method="POST" action='editar_metodo'>    
        <table  class="list">
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metodo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?> 
                            <tr>                            
                                <td><input type="text" name="id_metodo"  style="width : 50px"  value=<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo;?>
 readonly></td>
                                <td><input type="text" name="input_metodo"  style="width : 300px"  value=<?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
></td>
                                <td><a href="eliminar_metodo/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo;?>
">Eliminar</a></td>
                                <td> <button type="submit">EDITAR</button> </td>                             
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody> 
        </table> 
    </form>
    
        
 </div>

<h3>Administrar Impresoras</h3>


<div>Aca agregamos impresoras (Agregar)
        <div> editar, borrar </div>
</div>



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




<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
