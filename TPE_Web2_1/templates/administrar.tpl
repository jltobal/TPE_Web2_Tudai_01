{include file = 'header.tpl'}

<h3>Administrar Metodos</h3>

<div>
    <form method="POST" action="agregar_metodo">
        <label>Ingrese metodo a ingresar o editar</label>
        <input type="text" name="input_metodo">
        <button type="submit">Agregar</button>

        
    </form>
    <form method="POST" action='editar_metodo'>    
        <table  class="list">
                    <tbody>
                        {foreach from=$metodo item=$info} 
                            <tr>                            
                                <td><input type="text" name="id_metodo"  style="width : 50px"  value={$info->id_metodo} readonly></td>
                                <td><input type="text" name="input_metodo"  style="width : 300px"  value={$info->metodo}></td>
                                <td><a href="eliminar_metodo/{$info->id_metodo}">Eliminar</a></td>
                                <td> <button type="submit">EDITAR</button> </td>                             
                            </tr>
                        {/foreach}
                    </tbody> 
        </table> 
    </form>
    
        
 </div>

<h3>Administrar Impresoras</h3>


<div>Aca agregamos impresoras (Agregar)
        <div> editar, borrar </div>
</div>



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




{include file = 'footer.tpl'}