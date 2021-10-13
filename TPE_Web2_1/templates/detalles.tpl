{include file = 'header.tpl'}

<table  class="list">

<tbody>
{foreach from=$impresora item=$info} 
<tr>
    <td>{$info->modelo}</td>
    <td>{$info->marca}</td>
    <td>{$info->descripcion}</td>
</tr>
{/foreach}

 </tbody>   
 </table>

{include file = 'footer.tpl'}
