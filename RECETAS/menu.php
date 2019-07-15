<?php 

$menuItems = [
'home' => 'index.php',
'registrarse' => 'register.php',
'login' => 'login.php',
'perfil' => 'profile.php',
'blog' => 'blog.php',
]

?>

<nav class="navbar navbar-expand-lg navbar-light" id="menu">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">

	 <a class="navbar-brand mb-0 h1" href="#">
	 	 <?= $title; ?>
	 </a>	
	<ul class="navbar-nav ml-auto">	
<?php foreach($menuItems as $key=>$value): ?>
<li class="nav-item m-2">
    <a class="nav-link" href="<?= $value; ?>"><?= $key; ?></a>
</li>
<?php endforeach; ?>
	</ul>
</div>
</nav>