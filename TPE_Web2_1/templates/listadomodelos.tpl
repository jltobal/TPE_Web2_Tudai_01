{include file = 'header.tpl'}

<a href='filtrar'>Filtrar</a>
<table  class="list">
<tbody>

{foreach from=$impresora item=$info} 
    <tr>
        <td>{$info->modelo}</td>
        <td>{$info->marca}</td>
        <td>{$info->descripcion}</td>
        <td>{$info->metodo}</td>
        <td><a href="detalle/{$info->id_impresora}">Detalles</a></td>
    </tr>
{/foreach}

 </tbody>   
 </table>
{include file = 'footer.tpl'}
