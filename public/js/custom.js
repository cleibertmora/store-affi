$(document).ready(function() {

    function openEditCategory(){
        console.log('hola');
    }

    $('.edit-icon-category').on('click', function(e){
		e.preventDefault();
		//$body.toggleClass('body-open');
		$('#edit-category').toggleClass('open');
		$('#overlay-elem').addClass('overlay-open-new');
		console.log('epa');
	});

});

