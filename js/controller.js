$(document).ready(function(){

	$( "#filterPanel" ).hide();

	$(".hide-nav").click(function() {
		$( "#barraNavegacao" ).hide();
	});

	$(".navbar-toggler").click(function () {
	    $("#barraNavegacao").toggle();
	});

	$("#show-filterPanel").click(function() {
		$( "#filterPanel" ).show();
	});

	$("#hide-filterPanel").click(function() {
		$( "#filterPanel" ).toggle();
	});

})