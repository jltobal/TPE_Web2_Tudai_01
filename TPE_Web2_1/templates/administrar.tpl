{include file = 'header.tpl'}

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
 <a href="agregar/{$info->id_impresora}">Agregar</a>


<table  class="list">
<tbody>

{foreach from=$impresora item=$info} 
    <tr>
        <td>{$info->tipo}</td>
        <td>{$info->modelo}</td>
        <td>{$info->Marca}</td>
        <td>{$info->descripcion}</td>
        <td><a href="editar/{$info->id_impresora}">Editar</a></td>
        <td><a href="eliminar/{$info->id_impresora}">Eliminar</a></td>

    </tr>
{/foreach}

 </tbody>   
 </table>

{include file = 'footer.tpl'}