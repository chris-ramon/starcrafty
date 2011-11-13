$(document).ready(function(){
    $('.reservarCupo').click(function(){
        var id_torneo = $(this).closest('p').attr('id');
        var detallesReserva = $('#tournament').find('.detalleReserva');
        detallesReserva.each(busquedaReserva);

        function busquedaReserva(index){        
            var id =  $(this).attr('class').split(" ")[1];        
            if(id == id_torneo){
                $('#backgroundPopUp').css('opacity','0.5');
                $('#backgroundPopUp').fadeIn('slow');
                $(this).fadeIn();
                return false;
            }
        }
        return false;
    });



    $('.cerrar').click(function(){
        $('#backgroundPopUp').fadeOut('slow');
        $('.detalleReserva').fadeOut();
        $('#backgroundPopUp').css('opacity','1');
        return false;
    });
    $('#menu a:eq(0)').mouseover(function(){
        $('#torneoMenu').slideDown();    
    });
    $('#torneoMenu').mouseleave(function(){
        $(this).slideUp();
    });
    $('#registrate').click(function(){
        $('#backgroundPopUp').css('opacity','0.5');
		$('#backgroundPopUp').fadeIn('slow');
        $('#registro').slideDown();
        return false;
    });
    $('#cerrarRegistro').click(function(){
        $('#backgroundPopUp').fadeOut('slow');
        $('#registro').fadeOut();
        $('#backgroundPopUp').css('opacity','1');    
    });

    $('#content h1').bind('click', ir);
    
});

function ir(){
    window.location = "/starcrafty/";
}


