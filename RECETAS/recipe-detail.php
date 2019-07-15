<?php   

$id = $_GET['id'] -1;

$allRecipes = [
  [
  'id' => 1,
  'title' => 'Fideos al pesto',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/pasta.jpg',

  ],
  [
  'id' => 2,
  'title' => 'Pastel de papa',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/pastel-papa.jpg',
  ],
  [
  'id' => 3,
  'title' => 'Calabaza rellena',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/calabaza.jpg',
  ],
  [
  'id' => 1,
  'title' => 'Fideos al pesto',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/pasta.jpg',
  ],
  [
  'id' => 2,
  'title' => 'Pastel de papa',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/pastel-papa.jpg',
  ],
  [
  'id' => 3,
  'title' => 'Calabaza rellena',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/calabaza.jpg',
  ],
  [
  'id' => 1,
  'title' => 'Fideos al pesto',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/pasta.jpg',
  ],
  [
  'id' => 2,
  'title' => 'Pastel de papa',
  'author' => 'juanaCocina',
  'portions' => 5,
  'image' => 'img/pastel-papa.jpg',
  ],


];


$title = 'Detalle';
require_once 'head.php';  
?>

<body>

  <div class="container">

  <?php require_once 'menu.php'; ?>

  <div class="row justify-content-center">

    <div class="col-12 mt-3">
      <small>por: <?= $allRecipes[$id]['author'] ?></small> 
      <h1 class="card-title"><?= $allRecipes[$id]['title'] ?></h1> 
      <i class="rating material-icons">star</i>
      <i class="rating material-icons">star</i>
      <i class="rating material-icons">star</i>
      <i class="rating material-icons">star</i>
      <i class="rating material-icons">star</i>
      <p class="card-text">Porciones: <?= $allRecipes[$id]['portions'] ?></p>

      <img class="img img-fluid" src="<?= $allRecipes[$id]['image'] ?>" alt="Card image cap">

      <nav class="mt-5">
        <h3>Ingredientes</h3>
        <ul>
          <li>3 huevos</li>
          <li>1 taza de harina</li>
          <li>1 taza de leche</li>
          <li>1 taza de agua hirviendo</li>
        </ul>
      </nav>

      <article class="mt-5">
        <h3>Descripción</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      <nav class="mt-5">
        <ul>
          <li style="display: inline-block;"><a href="index.php" class="btn btn-danger"><i class="fa fa-heart-o"></i></a></li>
          <li style="display: inline-block;"><a href="index.php" class="btn btn-primary">Volver</a></li>
        </ul>
      </nav>

    </div>


  </div>

  <?php require_once 'footer.php'; ?>

  </div>

</body>
</html>