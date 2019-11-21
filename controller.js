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

	$('#interesseModal').on('show.bs.modal', function (event) {                                                       
        
        var button = $(event.relatedTarget); // Button that triggered the modal
        var imovelId = button.data('id');                                                                 
        
        var modal = $(this);
        modal.find('#imovelId').val(imovelId);
    });
})