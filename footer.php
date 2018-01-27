
<!-- FOOTER -->
<footer class="row" id="footer">
	<div class="container-fluid">
		<div class="row col-12">
			<div class="col-md-3">
				<h3 class="col-12 footer-titles">Partenaires</h3>
				<img src="img/RTEmagicC_logo-upem.png" class="img-fluid">
				<img src="img/RTEmagicC_LogUPE_01.png" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h3 class="col-12 footer-titles">Contact</h3>
				<div class="row">
					<p class="col-lg-6">
						Campus Numérique<br>
						Bâtiment Ada Lovelace (ex IFU), 2ème étage<br>
						<i class="fa fa-phone"></i> 01 60 95 73 56<br>
						<i class="fa fa-envelope"></i> campus.numerique@u-pem.fr<br>
					</p>
					<p class="col-lg-6">
						Cellule Innovation Pédagogique<br>
						Bâtiment Ada Lovelace (ex IFU), Bureau 205<br>
						<i class="fa fa-phone"></i> 01 60 95 76 79<br>
						<i class="fa fa-envelope"></i> Innovationpeda@u-pem.fr<br>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<h3 class="col-12 footer-titles">Liens utiles</h3>
				<div class="col-12 btn-group-vertical">
					<a href="assistance.php" class="">Assistance</a>
					<a href="https://ddt.u-pem.fr/" class="">Demande de travaux</a>
					<a href="mentions_legales.php" class="">Mentions légales</a>
					<a href="plan_du_site.php" class="">Plan du site</a>
				</div>
			</div>
		</div>
		<div class="row col-12 justify-content-md-center footer-copyright"><p class="text-center col-12">Copyright © Campus Numérique 2018</p></div>
	</div>	
</footer>
</div>


<!-- SCRIPTS -->
<!-- jQuery & Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="js/typeahead.js"></script>


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
<script>
$(document).ready(function(){
    $("input").typeahead({
        source: ['Innovation', 'Assistance'],
        minLength: 2
    });
});  
</script>

</body>
</html>