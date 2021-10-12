{include file = 'header.tpl'}

<br>
<h3>Seleccione el tipo de impresora</h3>
<br>

<form>
    <div class="form-group">
        <label>Sistema</label>
            <select name="select" id="selectMetodo" placeholder="seleccione metodo">
                <option value='Laser monocromo'>Laser</option>
                <option value='Color'>Tinta</option>
                <option value='Tinta color'>Matriz de punto</option>
                <option value='portable'>Portatiles</option>
                <option value='fiscal'>Fiscales</option>
    </form>
   </select>

    </div>
    

    <div id="ajax-contenedor">
    
    </div>

{include file = 'footer.tpl'}
