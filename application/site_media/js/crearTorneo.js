
$(document).ready(function(){    

    $('#mainContent a:eq(0)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#principal').delay(400).fadeIn();
        return false;
    });
    
    $('#mainContent a:eq(1)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#detalles').delay(400).fadeIn();
        return false;
    });
    
    $('#mainContent a:eq(2)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#cronograma').delay(400).fadeIn();
        return false;
    });
    
    $('#mainContent a:eq(3)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#confirmar').delay(400).fadeIn();
        return false;
    });
    
    $('#datosPrueba').click(function(){
        
        return false;
    });
});
