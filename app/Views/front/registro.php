<div class="container my-5"> <!-- espaciar verticalmente -->
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card my-4"> <!-- espaciar la tarjeta -->
        <div class="card-header">
          <h3 class="text-center">Registro</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group my-3"> <!-- Agregado my-3 para espaciar los grupos de formulario -->
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Inserte nombre...">
            </div>
            <div class="form-group my-3"> 
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Inserte apellido...">
            </div>
            <div class="form-group my-3"> 
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="Inserte Email...">
            </div>
            <div class="form-group my-3"> 
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Inserte usuario...">
            </div>
            <div class="form-group my-3"> 
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required placeholder="Inserte password...">
            </div>
            <!-- Botones de Guardar y Cancelar -->
            <button type="submit" class="btn btn-success btn-block mb-4">Guardar</button>
            <button type="button" class="btn btn-danger btn-block mb-4" onclick="cancelar()">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
