(function($){

$('#SP').hide();


	"use strict";

	$(function(){
		$("#temasB").mouseover(function(){

         $( "#temasB" ).removeClass( "escondido");

    });

    $(window).resize(function(){     

       if ($('body').width() <= 820 ){

             $( "#temasArtistas" ).addClass( "escondido" );
             $( "#noticias" ).removeClass( "escondido" );
             $( "#buscar" ).addClass( "escondido" );
             $( "#buscarForma" ).removeClass( "escondido" );
             

       }

       if ($('body').width() >= 820 ){

             $( "#temasArtistas" ).removeClass( "escondido" );
             $( "#noticias" ).addClass( "escondido" );
             $( "#buscar" ).removeClass( "escondido" );
             $( "#buscarForma" ).addClass( "escondido" );

       }

});

		console.log('hello from functions.js');


		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array 
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}


	});

})(jQuery);
