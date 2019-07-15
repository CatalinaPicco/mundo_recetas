<?php
$title = 'Mis recetas';
require_once 'head.php';
?>
<body>
  <?php require_once 'menu.php'; ?>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
        Agregar receta
      </button>
    </div>
    <h2 class="mb-4">Mis recetas</h2>
    <?php require_once 'my-recipes.php'; ?>
    <?php require_once 'footer.php'; ?>
    <h2 class="mb-4 mt-5">Buscar recetas</h2>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar recetas">
      <div class="input-group-append">
        <button class="btn btn-secondary" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
    <div class="row mt-5">
      <aside class="col-sm-4">
        <p>Filtro 1</p>
        <div class="card">
          <article class="card-group-item">
            <header class="card-header">
              <h6 class="title">Novedades </h6>
            </header>
            <div class="filter-content">
              <div class="card-body">
                <form>
                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label">
                      Licuados
                    </span>
                  </label> <!-- form-check.// -->
                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label">
                      Pastelería
                    </span>
                  </label>  <!-- form-check.// -->
                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label">
                      Mesa navideña
                    </span>
                  </label>  <!-- form-check.// -->
                </form>

              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->

          <article class="card-group-item">
            <header class="card-header">
              <h6 class="title">Momento del día</h6>
            </header>
            <div class="filter-content">
              <div class="card-body">
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Desayuno
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Almuerzo
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Merienda
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Cena
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Colación
                  </span>
                </label>
              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->
        </div> <!-- card.// -->
      </aside> <!-- col.// -->

      <aside class="col-sm-4">
        <p>Filtro 2</p>
        <div class="card">
          <article class="card-group-item">
            <header class="card-header"><h6 class="title">Más populares</h6></header>
            <div class="filter-content">
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item">Cras justo odio <span class="float-right badge badge-light round">142</span> </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a>
                <a href="#" class="list-group-item">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a>
                <a href="#" class="list-group-item">Another item <span class="float-right badge badge-light round">12</span>  </a>
              </div>  <!-- list-group .// -->
            </div>
          </article> <!-- card-group-item.// -->
          <article class="card-group-item">
            <header class="card-header"><h6 class="title">Tipo de receta</h6></header>
            <div class="filter-content">
              <div class="card-body">
                <label class="btn btn-danger">
                  <input class="" type="checkbox" name="myradio" value="">
                  <span class="form-check-label">Apto celíacos</span>
                </label>
                <label class="btn btn-success">
                  <input class="" type="checkbox" name="myradio" value="">
                  <span class="form-check-label">Vegetariano</span>
                </label>
                <label class="btn btn-primary">
                  <input class="" type="checkbox" name="myradio" value="">
                  <span class="form-check-label">Bajas calorías</span>
                </label>
              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->
        </div> <!-- card.// -->
      </aside> <!-- col.// -->

      <aside class="col-sm-4">
        <p>Filtro 3</p>
        <div class="card">
          <article class="card-group-item">
            <header class="card-header">
              <h6 class="title">Rango de precios</h6>
            </header>
            <div class="filter-content">
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Min</label>
                    <input type="number" class="form-control" id="inputEmail4" placeholder="$0">
                  </div>
                  <div class="form-group col-md-6 text-right">
                    <label>Max</label>
                    <input type="number" class="form-control" placeholder="$1000">
                  </div>
                </div>
              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->
          <article class="card-group-item">
            <header class="card-header">
              <h6 class="title">Ingredientes </h6>
            </header>
            <div class="filter-content">
              <div class="card-body">
                <div class="custom-control custom-checkbox">
                  <span class="float-right badge badge-light round">52</span>
                  <input type="checkbox" class="custom-control-input" id="Check1">
                  <label class="custom-control-label" for="Check1">Huevo</label>
                </div> <!-- form-check.// -->

                <div class="custom-control custom-checkbox">
                  <span class="float-right badge badge-light round">132</span>
                  <input type="checkbox" class="custom-control-input" id="Check2">
                  <label class="custom-control-label" for="Check2">Leche</label>
                </div> <!-- form-check.// -->

                <div class="custom-control custom-checkbox">
                  <span class="float-right badge badge-light round">17</span>
                  <input type="checkbox" class="custom-control-input" id="Check3">
                  <label class="custom-control-label" for="Check3">Pollo</label>
                </div> <!-- form-check.// -->

                <div class="custom-control custom-checkbox">
                  <span class="float-right badge badge-light round">7</span>
                  <input type="checkbox" class="custom-control-input" id="Check4">
                  <label class="custom-control-label" for="Check4">Harina de trigo</label>
                </div> <!-- form-check.// -->
              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->
        </div> <!-- card.// -->
      </aside> <!-- col.// -->
    </div> <!-- row.// -->
    <?php require_once 'all-recipes.php'; ?>
  </div>
<?php require_once 'modal-recipe.php' ?>
</body>
</html>
