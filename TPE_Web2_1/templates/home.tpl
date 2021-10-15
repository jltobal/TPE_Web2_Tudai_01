{include file = 'header.tpl'}

<table  class="list">

<tbody>
    <thead>
        <tr>
            <th >Modelo</th>
            <th >Marca</th>
            <th >Descripción</th>
            <th >Método</th>
            <th >Más información</th>
        </tr>
    <thead>

    {foreach from=$impresora item=$info} 
        <tr>
            <td>{$info->modelo}</td>
            <td>{$info->marca}</td>
            <td>{$info->descripcion}</td>
            <td>{$info->metodo}</td>
            <td><a href="detalle/{$info->id_impresora}" >Detalles</a></td>
        </tr>
    {/foreach}

    </tbody>   
 </table>

{include file = 'footer.tpl'}
