<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:56:43
  from 'C:\xampp\htdocs\proyectos\WEB-2\PHP\TP_Especial_1\TPE_Web2_1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61678e5b6b3a67_11294095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73be179be26b504e0b63371361ed6f2dfddde68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB-2\\PHP\\TP_Especial_1\\TPE_Web2_1\\templates\\header.tpl',
      1 => 1634176601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61678e5b6b3a67_11294095 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="BASE_URL">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <nav>
      <a href='home'>home</a>
      <a href='modelos'>Lista completa</a>
      <a href='registrar'>Registrarse</a>        

      <?php echo '<script'; ?>
> console.log($_SESSION['USER_ID']); <?php echo '</script'; ?>
>

     <?php if ((isset($_SESSION['USER_ID']))) {?>
      <a href='administrar'>Administrar(<?php echo $_SESSION['USER_EMAIL'];?>
)</a>       <a href='logout'>Logout</a>
      <?php } else { ?>
      <a href='login'>LogIn</a>        <?php }?>
      
  </nav>

  <h2> MUNDO IMPRESORAS </h2><br>
<?php }
}
