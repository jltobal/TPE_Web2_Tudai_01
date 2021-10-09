<!DOCTYPE html>
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

  {foreach from=$impresora item=$info}
<tr>
    <td>{$info->descripcion}</td>
    <td>{$info->tipo}</td>
   
</tr>

{/foreach}