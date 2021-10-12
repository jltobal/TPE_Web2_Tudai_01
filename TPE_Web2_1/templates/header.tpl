<!DOCTYPE html>
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
      <a href='registrar'>Registrarse</a>  {*Hacer formulario de Registro*}
      

      <script> console.log($_SESSION['USER_ID']); </script>

     {if isset($smarty.session.USER_ID)}
      <a href='administrar'>Administrar({$smarty.session.USER_EMAIL})</a> {*Hacer formulario de administracion*}
      <a href='logout'>Logout</a>
      {else}
      <a href='login'>LogIn</a>  {*Hacer formulario de login y persistencia*}
      {/if}
      
  </nav>

  <h2> MUNDO IMPRESORAS </h2><br>
