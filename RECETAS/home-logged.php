<?php
$title = 'Mis recetas';
require_once 'head.php';
?>
<body>
  <div class="container">
    <?php require_once 'menu.php'; ?>
    <div class="row justify-content-center mt-5">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
        Agregar receta
      </button>
    </div>
    <h2 class="mb-4">Mis recetas</h2>
    <?php require_once 'my-recipes.php'; ?>
    <?php require_once 'footer.php'; ?>
  </div>
  <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Crear nueva receta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="col-12">
            <div class="form-group">
              <label for="inputAddress">Titulo</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group">
              <label for="inputEmail4">Ingredientes</label>
              <div class="form-row">
                <input type="email" class="form-control col-8" id="inputEmail4">
                <button type="button" name="button" class="btn btn-warning btn-sm col-3 ml-3">Agregar</button>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Descripcion</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Porciones</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="form-group">
              <label for="inputPassword4">Calorías por porcion</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</body>
</html>
