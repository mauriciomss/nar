/**=============================================================================
 *
 *	Filename:  function.ajax.js
 *	
 *	(c)Autor: Arkos Noem Arenom
 *	
 *	Description: Ajax para hacer las consultas
 *	
 *	Licence: GPL|LGPL
 *	
 *===========================================================================**/

$(document).ready(function(){

  var timeSlide = 500;
  $('#userid').focus();
  
  $('#timer').hide(0);
  $('#timer').css('display','none');

  $('#login_userbttn').click(function(){
  	
    $('#timer').fadeIn(300);
    $('.box-info, .box-success, .box-alert, .box-error').slideUp(timeSlide);
    setTimeout(function(){
	    if ( $('#password').val() != "" ){

		    $.ajax({
			    type: 'POST',
			    url: 'index.php?ctrl=Login&accion=ChangePassword',
			    data: 'pass=' + $('#password').val(),
			    dataType : 'json',
			    success:function(data){

				    if ( !data.error ){
					    $('#alertBoxes').html('<div class="box-success"></div>');
					    $('.box-success').hide(0).html('Espera un momento&#133;');
					    $('.box-success').slideDown(timeSlide);
					    setTimeout(function(){
						    window.location.href = data.url;
					    },(timeSlide + 500));
				    }
				    else{
					    $('#alertBoxes').html('<div class="box-error"></div>');
					    //$('.box-error').hide(0).html('Lo sentimos, pero los datos son incorrectos: ' + data.error);
					    $('.box-error').hide(0).html('Lo sentimos, pero los datos son incorrectos.');
					    $('.box-error').slideDown(timeSlide);
				    }
				    $('#timer').fadeOut(300);
			    },
			    error:function(){
				    $('#timer').fadeOut(300);
				    $('#alertBoxes').html('<div class="box-error"></div>');
				    $('.box-error').hide(0).html('Ha ocurrido un error durante la ejecuci&oacute;n');
				    $('.box-error').slideDown(timeSlide);
			    }
		    });

	    }
	    else{
		    $('#alertBoxes').html('<div class="box-error"></div>');
		    $('.box-error').hide(0).html('El campo esta vacio');
		    $('.box-error').slideDown(timeSlide);
		    $('#timer').fadeOut(300);
	    }
    },timeSlide);

    return false;

  });


});