$(
	function  () {
		$("#inicio a:contains('Início')").parent().addClass('active-menu');
		$("#produtos a:contains('produtos')").parent().addClass('active');  
	}
	
	);
/*
$(
	function(){
		$(document).scroll(
			function () {
				if($('[data-spy]').hasClass('affix-top')){
					$('.navbar.hidden').removeClass('hidden').addClass('visible');
				}
			}
			);
	}
	);
	*/

	$(document).scroll( function (argument) {
			if ($('#menu').hasClass('affix')) {

				$('[data-spy="affix"]').addClass('navbar-fixed-top');
				$('.navbar-right').removeClass('hidden');
				$('.dropdown.hidden').removeClass('hidden');
				$('a.navbar-brand').removeClass('hidden-lg').removeClass('hidden-md');

			}

		});
		$(document).scroll( function (argument) {
			if ($('#menu').hasClass('affix-top')) {
				$('[data-spy="affix"]').removeClass('navbar-fixed-top');
				$('.navbar-right').addClass('hidden');
				$('a.navbar-brand').addClass('hidden-lg').addClass('hidden-md');

			}


		});

		$(document).scrol(function() {
			if ($('#header').hasClass('hidden')) {
				$('.dropdown.hidden').removeClass('hidden');	
			}
		});
		
		