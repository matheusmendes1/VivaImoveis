$(document).ready(function(){

	$(".hide-nav").click(function() {
		$( "#barraNavegacao" ).hide();
	});

	$(".navbar-toggler").click(function () {
	    $("#barraNavegacao").toggle();
	});

})