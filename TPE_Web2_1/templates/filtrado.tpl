<table  class="list">
<tbody>
{foreach from=$impresora item=$info}               
    {if $filtro == $info->metodo}
        <tr>
            <td>{$info->modelo}</td>
            <td>{$info->descripcion}</td>
            <td>{$info->metodo}</td>
        </tr>
    {/if}
 {/foreach}
</tbody>   
 </table>
