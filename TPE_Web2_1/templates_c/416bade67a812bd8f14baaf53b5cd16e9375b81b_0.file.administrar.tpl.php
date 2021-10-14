<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:26:30
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\administrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168bca639d943_12268502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '416bade67a812bd8f14baaf53b5cd16e9375b81b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\administrar.tpl',
      1 => 1634250488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168bca639d943_12268502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Administrar Metodos</h3>

 <div class="formulario">
    <div>
        <form class="formulario" method="POST" action="agregar_metodo">
            <label>Ingrese metodo a ingresar o editar</label><br>
            <input required="required" type="text" name="input_metodo">
            <button class="btn_form" type="submit">Agregar</button>   
        </form>
        <br>
            
            <table  class="list">
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metodo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
                                <form method="POST" action='editar_metodo'>
                                    <tr>                            
                                        <td><input id="id_oculto" type="text" name="id_metodo"  style="width : 50px"  value=<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo;?>
 readonly></td>
                                        <td><input type="text" name="input_metodo"  style="width : 300px"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
"></td>
                                        <td><a class="btn_form" href="eliminar_metodo/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo;?>
">Eliminar</a></td>
                                        <td> <button class="btn_form" type="submit">EDITAR</button> </td>                             
                                    </tr>
                                </form>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody> 
            </table>       
    </div>
</div>

<br>

<h3>Administrar Impresoras</h3>

<br>
<div class="formulario">
<form class="formulario" method="POST" action='agregar_impresora'>
    <label>Marca</label>
    <input required="required" type="text" name="marca" placeholder="Canon">
    <label>Modelo</label>
    <input required="required" type="text" name="modelo" placeholder="TX135">
    <label>Metodo</label>    
    <select  name="select_metodo" id="selectMetodo" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metodo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>                      
        <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <label>Detalles</label>
    <input required="required" type="text" name="descripcion" placeholder="Laser monocromo">

    <button class="btn_form" type="submit">Agregar</button>
 </form>

<br>

<table  class="list">
<tbody>

</form>
      
                    <tbody>
                    <tr>
                        <th></th>
                        <th >Marca</th>
                        <th >Modelo</th>
                        <th >Descripción</th>
                        <th >Método</th>
                    </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['impresora']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?> 
                            <form method="POST" action='editar_impresora'>  
                                <tr>                            
                                    <td><input id="id_oculto" type="text" name="id_impresora"  style="width : 50px"  value=<?php echo $_smarty_tpl->tpl_vars['info']->value->id_impresora;?>
 readonly></td>
                                    <td><input required="required" type="text" name="marca" value=<?php echo $_smarty_tpl->tpl_vars['info']->value->marca;?>
></td>
                                    <td><input required="required" type="text" name="modelo" value=<?php echo $_smarty_tpl->tpl_vars['info']->value->modelo;?>
></td>
                                    <td><input required="required" type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->descripcion;?>
"></td>
                                    <td><select name="select_metodo" id="selectMetodo">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo_fk;?>
" disable><?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metodo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>               
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value->id_metodo;?>
" ><?php echo $_smarty_tpl->tpl_vars['info']->value->metodo;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select></td>
                                    <td><a class="btn_form"  href="eliminar_impresora/<?php echo $_smarty_tpl->tpl_vars['info']->value->id_impresora;?>
">Eliminar</a></td>
                                    <td> <button class="btn_form" type="submit">EDITAR</button> </td>                             
                                </tr>
                            </form>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
    
    </tbody> 
     </table> 
</div>




<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
