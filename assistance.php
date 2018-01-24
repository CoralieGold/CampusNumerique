<?php include_once("header.php") ?>

<!-- CONTENT -->
<main class="row">
	<section class="darkSection col-12 container">
		<h1 class="col-12 center-elements">Assistance</h1>
		<div class="row justify-content-md-center">
			<div class="btn-group" role="group" aria-label="FilterListButtons">
				<button class="btn btn-custom col-auto filter-button" data-filter="all">Tout</button>
				<button class="btn btn-custom col-auto filter-button" data-filter="cat1">Catégorie 1</button>
				<button class="btn btn-custom col-auto filter-button" data-filter="cat2">Catégorie 2</button>
				<button class="btn btn-custom col-auto filter-button" data-filter="cat3">Catégorie 3</button>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="card-group col-12">
				<div class="col-3 filter gallery_product cat1">
					<a class="card" href="reponse_assistance.php">
						<i class="card-img-top background-fa-color fa fa-desktop fa-2x"></i>
						<div class="card-body">
							<h3>Ceci est une question de la page assistance ?</h3>
						</div>
						 <div class="card-footer text-muted">
							Catégorie 1
						</div>
					</a>
				</div>

				<div class="col-3 filter gallery_product cat2">
					<a class="card" href="reponse_assistance.php">
						<i class="card-img-top background-fa-color fa fa-desktop fa-2x"></i>
						<div class="card-body">
							<h3>Ceci est une question de la page assistance ?</h3>
						</div>
						 <div class="card-footer text-muted">
							Catégorie 2
						</div>
					</a>
				</div>

				<div class="col-3 filter gallery_product cat3">
					<a class="card" href="reponse_assistance.php">
						<i class="card-img-top background-fa-color fa fa-desktop fa-2x"></i>
						<div class="card-body">
							<h3>Ceci est une question de la page assistance ?</h3>
						</div>
						 <div class="card-footer text-muted">
							Catégorie 3
						</div>
					</a>
				</div>

				<div class="col-3 filter gallery_product cat1">
					<a class="card" href="reponse_assistance.php">
						<i class="card-img-top background-fa-color fa fa-desktop fa-2x"></i>
						<div class="card-body">
							<h3>Ceci est une question de la page assistance ?</h3>
						</div>
						 <div class="card-footer text-muted">
							Catégorie 1
						</div>
					</a>
				</div>

				<div class="col-3 filter gallery_product cat3">
					<a class="card" href="reponse_assistance.php">
						<i class="card-img-top background-fa-color fa fa-desktop fa-2x"></i>
						<div class="card-body">
							<h3>Ceci est une question de la page assistance ?</h3>
						</div>
						 <div class="card-footer text-muted">
							Catégorie 3
						</div>
					</a>
				</div>

			</div>
		</div>
	</section>
</main>

<?php include_once("footer.php") ?>