<?php
$title = 'Mis recetas';
require_once 'head.php';
?>
<body>
	<?php require_once 'menu.php'; ?>
	<div class="container-fluid">
		<?php require_once 'menu.php'; ?>
		<section class="home-section">
			<div class="row justify-content-center">
				<img class="home-img mb-3" src="img/recipe.svg" alt="recipes">
			</div>
			<div class="row justify-content-center">
				<div class="input-group col-6 mt-1 mb-5">
					<input type="text" class="form-control" placeholder="Buscar recetas">
					<div class="input-group-append">
						<button class="btn btn-secondary" type="button">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
					Agregar receta
				</button>
			</div>
		</section>

		<div class="jumbotron mt-3">
			<h1 class="display-4">Armá tu plan de alimentación</h1>
			<p class="lead">Subí tus propias recetas, y aprendé de las recetas de otras personas.</p>
			<hr class="my-4">
			<p>Podés filtrar por categoría, calorías o armar comidas al azar.</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Empezar</a>
		</div>
		<?php require_once 'all-recipes.php'; ?>
		<?php require_once 'footer.php'; ?>
	</div>
	<?php require_once 'modal-recipe.php' ?>
</body>
</html>
