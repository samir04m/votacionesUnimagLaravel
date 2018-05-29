
$(document).ready(function(){

    $('.modal').modal();
    $('select').material_select();

    // logica modal confirmacion elimanacion

    var urlDelete = '#';

	$('a.btnDelete').click(function(e){
		e.preventDefault();
		urlDelete = $(this).attr('href');
		$('#modal-confirmarEliminacion').modal('open');
	});

	$('a#btnEliminar').click(function(){
		location.href = urlDelete;
	});

});
