{include file = 'header.tpl'}

 <h2>Registrarse</h2>
 <form method="POST" class="row g-3">
 <div class="col-auto"> 
   <input type="text" name="email" class="form-control" id="" placeholder="Ingrese su email...">
 </div>
 <div class="col-auto">
    <input type="password" name="password" class="form-control" id="" placeholder="Ingrese su password...">
 </div>
 <div class="col-auto">
   <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
 </div>
</form>

{include file = 'footer.tpl'}