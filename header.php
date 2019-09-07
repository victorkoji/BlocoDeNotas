<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Bloco de notas</title>
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/stylesheet.css">
	<script src="https://use.fontawesome.com/f13e8c7359.js"></script>

</head>

<header class="sticky-top mb-5">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Meu bloco de notas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Adicionar</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Link dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Ação</a>
						<a class="dropdown-item" href="#">Outra ação</a>
						<a class="dropdown-item" href="#">Algo mais aqui</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>

</html>