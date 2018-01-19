
<!-- FOOTER -->
<footer class="row" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h3>Partenaires</h3>
				<img src="img/RTEmagicC_logo-upem.png" class="img-fluid">
				<img src="img/RTEmagicC_LogUPE_01.png" class="img-fluid">
			</div>
			<div class="col-sm-6">
				<h3>Contact</h3>
				<div class="row">
					<p class="col-6">
						Campus Numérique<br>
						Bâtiment Ada Lovelace (ex IFU), 2ème étage<br>
						Tél : 01 60 95 73 56<br>
						Mail : campus.numerique@u-pem.fr<br>
					</p>
					<p class="col-6">
						Cellule Innovation Pédagogique<br>
						Bâtiment Ada Lovelace (ex IFU), Bureau 205<br>
						Tél : 01 60 95 76 79<br>
						Mail : Innovationpeda@u-pem.fr<br>
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<a href="#" class="btn btn-primary">Assistance</a>
				<a href="#" class="btn btn-primary">Demande de travaux</a>
				<a href="mentions_legales.php">Mentions légales</a>
				<a href="plan_du_site.php">Plan du site</a>
			</div>
		</div>
		<div class="row justify-content-md-center">Copyright © Campus Numérique 2018</div>
	</div>	
</footer>
</div>


<!-- SCRIPTS -->
<!-- jQuery & Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<!-- Custom -->
<script>
	$(document).ready(function(){

		$(".filter-button").click(function() {
			var value = $(this).attr('data-filter');

			if(value == "all")
			{
            $('.filter').show('1000');
	        }
	        else
	        {
	            $(".filter").not('.'+value).hide('3000');
	            $('.filter').filter('.'+value).show('3000');
	        }
	    });

		if ($(".filter-button").removeClass("active")){
			$(this).removeClass("active");
		}
		$(this).addClass("active");

		$(".filter-button_2").click(function() {
			var value = $(this).attr('data-filter');

			if(value == "all")
			{
            $('.filter_2').show('1000');
	        }
	        else
	        {
	            $(".filter_2").not('.'+value).hide('3000');
	            $('.filter_2').filter('.'+value).show('3000');
	        }
	    });

		if ($(".filter-button_2").removeClass("active")){
			$(this).removeClass("active");
		}
		$(this).addClass("active");

	});

</script>
</body>
</html>