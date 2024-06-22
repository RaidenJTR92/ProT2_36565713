<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card my-4">
        <div class="card-header">
          <h3 class="text-center">Iniciar Sesión</h3>
        </div>
        <div class="card-body">
          <form action="tu_script_de_validacion.php" method="POST">
            <!-- Action apunta al script de validación en el servidor -->
            <div class="form-group my-3">
              <label for="email">E-mail</label>
              <input type="text" class="form-control" id="email" name="email" required placeholder="Ingrese su email">
            </div>
            <div class="form-group my-3">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required placeholder="Ingrese su contraseña">
            </div>
            <button type="submit" class="btn btn-success btn-block mb-4">Ingresar</button>
            <button type="button" class="btn btn-danger btn-block mb-4" onclick="cancelar()">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>