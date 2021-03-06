<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Campus Numérique</title>
	<!-- META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- STYLES -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="style/font-awesome/css/font-awesome.min.css">

	<!-- Custom -->
	<link rel="stylesheet" href="style/css/main.css">
</head>
<body>
	<div class="container-fluid">
		<!-- HEADER -->
		<header class="row sticky-top" id="header">
			<div class="row col-12">
				<form class="form-inline col-12" action="resultat_recherche.php">
					<div class="form-group col-12">
							<a href="index.php" class="col-md-2 col-sm-6 col-xs-12"><img src="img/UPEM_LOGO.png" class="d-inline-block align-center img-fluid" alt=""></a>
							<a href="index.php" class="col-md-8 col-sm-6 col-xs-12 mb-2"><h1>Campus Numérique et Innovation Pédagogique</h1></a>
						</a>
						<div class="form-group mb-2 col-sm-2 col-xs-12 row" id="search-bar">
							<input class="form-control mb-2 col-9 typeahead" type="search" placeholder="Recherche"  data-provide="typeahead" aria-label="Recherche">
							<button type="submit" class="btn btn-custom mb-2 col-3 btn-custom-fa">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="row justify-content-md-center col-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Accueil</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="organisation.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Organisation
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="organisation.php">L'Organisation du Campus Numérique</a>
									<a class="dropdown-item" href="pole.php">Cellule Innovation Pédagogique de la VPEP</a>
									<a class="dropdown-item" href="pole.php">Pôle TIC du Campus Numérique</a>
									<a class="dropdown-item" href="pole.php">Pôle Audiovisuel du Campus Numérique</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="outils_formations.php">Outils & Formations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="agenda_breves.php">Agenda & Brèves</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="assistance.php">Assistance</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="realisations_projets.php">Réalisations & Projets</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>