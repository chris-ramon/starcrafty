$(document).ready(
    function(){
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
    
    $('#datosPrueba').bind("click", llenarCampos );
    }
);

function llenarCampos(){
    $('input[name="nombre"]').val('Torneo miraflores 2013 !');
    $('textarea[name="descripcion"]').val('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat gravida elit eget condimentum. Nullam lectus odio, venenatis et condimentum a, gravida sed neque. Proin et arcu tortor, non volutpat lectus. Aenean at justo sit amet libero suscipit malesuada.');
    $('input[name="tags"]').val('miraflores sc2 2013');      
}