
<!-- FOOTER -->
<footer class="row" id="footer">
	<div class="container-fluid">
		<div class="row col-12 footer-titles">
			<div class="col-sm-3">
				<h3>Partenaires</h3>
			</div>
			<div class="col-sm-6">
				<h3>Contact</h3>
			</div>
			<div class="col-sm-3">
				<h3>Liens utiles</h3>
			</div>
		</div>
		<div class="row col-12">
			<div class="col-sm-3">
				<img src="img/RTEmagicC_logo-upem.png" class="img-fluid">
				<img src="img/RTEmagicC_LogUPE_01.png" class="img-fluid">
			</div>
			<div class="col-sm-6">
				<div class="row">
					<p class="col-6">
						Campus Numérique<br>
						Bâtiment Ada Lovelace (ex IFU), 2ème étage<br>
						<i class="fa fa-phone"></i> 01 60 95 73 56<br>
						<i class="fa fa-envelope"></i> campus.numerique@u-pem.fr<br>
					</p>
					<p class="col-6">
						Cellule Innovation Pédagogique<br>
						Bâtiment Ada Lovelace (ex IFU), Bureau 205<br>
						<i class="fa fa-phone"></i> 01 60 95 76 79<br>
						<i class="fa fa-envelope"></i> Innovationpeda@u-pem.fr<br>
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="col-12 btn-group-vertical">
					<a href="assistance.php" class="">Assistance</a>
					<a href="https://ddt.u-pem.fr/" class="">Demande de travaux</a>
					<a href="mentions_legales.php" class="">Mentions légales</a>
					<a href="plan_du_site.php" class="">Plan du site</a>
				</div>
			</div>
		</div>
		<div class="row col-12 justify-content-md-center footer-copyright">Copyright © Campus Numérique 2018</div>
	</div>	
</footer>
</div>


<!-- SCRIPTS -->
<!-- jQuery & Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

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
	// Bootstrap 4 + MDB + typeahead label fix
	//Add class typeahead to your text input invoking typeahead
	$('.typeahead').on('focus', function() {
	    $(this).parent().siblings().addClass('active');
	}).on('blur', function() {
	    if (!$(this).val()) {
	        $(this).parent().siblings().removeClass('active');
	    }
	});

	var wordsToSearch = ['Innovation', 'Assistance', 'Projets'];

	//bloodhound demo
	//documentation : https://github.com/corejavascript/typeahead.js/blob/master/doc/bloodhound.md
	var wordsToSearch = new Bloodhound({
	    datumTokenizer: Bloodhound.tokenizers.whitespace,
	    queryTokenizer: Bloodhound.tokenizers.whitespace,
	    // `wordsToSearch` is an array of state names defined in "The Basics"
	    local: wordsToSearch
	});

	//Documentation : https://github.com/corejavascript/typeahead.js/blob/master/doc/jquery_typeahead.md
	$('#search-bar .typeahead').typeahead({
	    highlight: true,
	    hint: true,
	    minLength: 1
	}, {
	    name: 'wordsToSearch',
	    source: wordsToSearch,
	    limit: 10
	});

});  
</script>
</body>
</html>