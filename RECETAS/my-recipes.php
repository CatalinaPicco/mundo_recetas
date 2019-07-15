<?php

$myRecipes = [
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
];

?>

<div class="row justify-content-center">

	<?php foreach($myRecipes as $oneRecipe): ?>
		<div class="card p-0 m-1" style="width: 17rem;">
			<img class="card-img-top" src="<?= $oneRecipe['image'] ?>" alt="Card image cap">
			<div class="card-body">
			<small>por: <?= $oneRecipe['author'] ?></small>
			<h5 class="card-title"><?= $oneRecipe['title'] ?></h5>
			<i class="rating material-icons">star</i>
			<i class="rating material-icons">star</i>
			<i class="rating material-icons">star</i>
			<i class="rating material-icons">star</i>
			<i class="rating material-icons">star</i>
			<p class="card-text">Porciones: <?= $oneRecipe['portions'] ?></p>
			<a href="recipe-detail.php?id=<?= $oneRecipe['id'] ?>" class="btn btn-primary">Ver receta</a>
			</div>
		</div>
	<?php endforeach; ?>

</div>
