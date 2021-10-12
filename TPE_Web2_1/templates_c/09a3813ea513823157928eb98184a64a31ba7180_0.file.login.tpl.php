<?php
/* Smarty version 3.1.39, created on 2021-10-13 00:15:08
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616608ec87ddd1_81434018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a3813ea513823157928eb98184a64a31ba7180' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\login.tpl',
      1 => 1634076904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616608ec87ddd1_81434018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h2>Login</h2>
<form method="POST" class="row g-3" action="verify">
    <div class="col-auto">
        <input type="text" name="email" class="form-control" id="" placeholder="Ingrese su email...">
    </div>
    <div class="col-auto">
        <input type="password" name="password" class="form-control" id="" placeholder="Ingrese su password...">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Login</button>
    </div>
</form>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
