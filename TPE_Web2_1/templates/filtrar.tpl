{include file = 'header.tpl'}

<br>
<h3>Seleccione el tipo de impresora</h3>
<br>

<form>
    <div class="form-group">
        <label>Sistema</label>
            <select name="select" id="selectMetodo">
                <option value='laser'>Laser</option>
                <option value='Tinta'>Tinta</option>
                <option value='mpunto'>Matriz de punto</option>
                <option value='portable'>Portatiles</option>
                <option value='fiscal'>Fiscales</option>
   </select>

    </div>
    
    <button type="submit" class="btn_printer_type">Seleccionar</button>
    </form>

{include file = 'footer.tpl'}
