<?php 	

$title = 'Mis recetas';
require_once 'head.php';  
?>

<body>

	<div class="container">


			<?php require_once 'menu.php'; ?>

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

</body>
</html>