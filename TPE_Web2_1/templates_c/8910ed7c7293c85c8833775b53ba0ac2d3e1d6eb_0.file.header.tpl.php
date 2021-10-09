<?php
/* Smarty version 3.1.39, created on 2021-10-08 01:53:49
  from 'C:\xampp\htdocs\proyectos\WEB - 2\PHP\TP_Especial_1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f888da65795_68603099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8910ed7c7293c85c8833775b53ba0ac2d3e1d6eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB - 2\\PHP\\TP_Especial_1\\templates\\header.tpl',
      1 => 1633650827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f888da65795_68603099 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="BASE_URL">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <nav>
      <a href='home'>home</a>
      <!--FALTA BARRA DE NAVEGACION-->
  </nav>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['impresora']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->descripcion;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->tipo;?>
</td>
   
</tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
