<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>Admin</title>
		<style>
			main {
				margin-top: 100px;
			}
		</style>
	</head>
	<body>

		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Admin</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link" href="/admin/dashboard_textos">Textos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/admin/dashboard_categorias">Categorias</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/admin/dashboard_produtos">Produtos</a>
						</li>
					</ul>
					<div class="d-flex">
						<a href='/logout'>
							<button class="btn btn-outline-danger">Sair</button>
						</a>
					</div>
				</div>
			</div>
		</nav>

