{include file = 'header.tpl'}

<h3>Administrar Metodos</h3>

<div>
    <form method="POST" action="agregar_metodo">
        <label>Ingrese metodo a ingresar o editar</label><br>
        <input required="required" type="text" name="input_metodo">
        <button type="submit">Agregar</button>   
    </form>
    <br>
        
        <table  class="list">
                    <tbody>
                        {foreach from=$metodo item=$info}
                            <form method="POST" action='editar_metodo'>
                                <tr>                            
                                    <td><input type="text" name="id_metodo"  style="width : 50px"  value={$info->id_metodo} readonly></td>
                                    <td><input type="text" name="input_metodo"  style="width : 300px"  value="{$info->metodo}"></td>
                                    <td><a href="eliminar_metodo/{$info->id_metodo}">Eliminar</a></td>
                                    <td> <button type="submit">EDITAR</button> </td>                             
                                </tr>
                            </form>
                        {/foreach}
                    </tbody> 
        </table>       
 </div>

<br>

<h3>Administrar Impresoras</h3>

<br>

<form method="POST" action='agregar_impresora'>
    <label>Marca</label>
    <input required="required" type="text" name="marca" placeholder="Canon">
    <label>Modelo</label>
    <input required="required" type="text" name="modelo" placeholder="TX135">
    <label>Metodo</label>    
    <select  name="select_metodo" id="selectMetodo" >
        {foreach from=$metodo item=$info}                      
        <option value="{$info->id_metodo}">{$info->metodo}</option>
        {/foreach}
    </select>
    <label>Detalles</label>
    <input required="required" type="text" name="descripcion" placeholder="Laser monocromo">

    <button type="submit">Agregar</button>
 </form>

<br>

<table  class="list">
<tbody>

</form>
      
                    <tbody>
                        {foreach from=$impresora item=$info} 
                            <form method="POST" action='editar_impresora'>  
                                <tr>                            
                                    <td><input type="text" name="id_impresora"  style="width : 50px"  value={$info->id_impresora} readonly></td>
                                    <td><input required="required" type="text" name="marca" value={$info->marca}></td>
                                    <td><input required="required" type="text" name="modelo" value={$info->modelo}></td>
                                    <td><input required="required" type="text" name="descripcion" value="{$info->descripcion}"></td>
                                    <td><select name="select_metodo" id="selectMetodo">
                                        <option value="{$info->id_metodo_fk}" disable>{$info->metodo}</option>
                                        {foreach from=$metodo item=$info}               
                                        <option value="{$info->id_metodo}" >{$info->metodo}</option>
                                        {/foreach}
                                    </select></td>
                                    <td><a href="eliminar_impresora/{$info->id_impresora}">Eliminar</a></td>
                                    <td> <button type="submit">EDITAR</button> </td>                             
                                </tr>
                            </form>
                        {/foreach}
                    
    
    </tbody> 
     </table> 





{include file = 'footer.tpl'}