<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Bootstrap 4, from LayoutIt!</title>

		<meta name="description" content="Source code generated using layoutit.com">
		<meta name="author" content="LayoutIt!">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootswatch.css">

	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarColor02">
						<ul class="navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link active" href="index.php?hal=home">Home
								<span class="visually-hidden">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php?hal=about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php?hal=study">Study</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php?hal=tasks">Tasks</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php?hal=portofolio">Portofolio</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="container-fluid py-5">
			<?php error_reporting(0);
					//tangkap request halaman di url
					$hal = $_REQUEST['hal'];
					if (!empty($hal)) {
						include_once $hal . '.php';
					} else {
						include_once 'home.php';
					}
					?>
		</div>
		<footer class="bg-dark py-3">
			<p class="text-center text-light">&copy 2021 zuhdi-in. All rights reserved.</p>
		</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>