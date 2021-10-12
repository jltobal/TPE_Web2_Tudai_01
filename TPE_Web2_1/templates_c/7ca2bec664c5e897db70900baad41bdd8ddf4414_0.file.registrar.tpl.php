<?php
/* Smarty version 3.1.39, created on 2021-10-12 22:57:43
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\registrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165f6c77a2a19_50685864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ca2bec664c5e897db70900baad41bdd8ddf4414' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\registrar.tpl',
      1 => 1634018750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6165f6c77a2a19_50685864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <h2>Registrarse</h2>
 <br>
 
 <form method="POST" class="row g-3">
 <div class="col-auto"> 
   <input type="text" name="email" class="form-control" id="" placeholder="Ingrese su email...">
 </div>
 <div class="col-auto">
    <input type="password" name="password" class="form-control" id="" placeholder="Ingrese su password...">
 </div>
 <div class="col-auto">
   <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
 </div>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
