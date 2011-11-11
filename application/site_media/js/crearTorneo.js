$(document).ready(
    function(){

    $('#mainContent a:eq(1)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#principal').delay(400).fadeIn();
        return false;
    });
    
    $('#mainContent a:eq(2)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#detalles').delay(400).fadeIn();
        return false;
    });
    
    $('#mainContent a:eq(3)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#cronograma').delay(400).fadeIn();
        return false;
    });
    
    $('#mainContent a:eq(4)').click(function(){   
        $('.crearTorneoContent').fadeOut();
        $('#confirmar').delay(400).fadeIn();
        return false;
    });
    
    $('#datosPrueba').bind("click", llenarCampos );    

    $('#auspiciador').bind("keyup", listarAuspiciadores);

    $('#agregarAuspiciador').bind("click", agregarAuspiciador);
});

function llenarCampos(){
    $('input[name="nombre"]').val('Torneo miraflores 2013 !');
    $('textarea[name="descripcion"]').val('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat gravida elit eget condimentum. Nullam lectus odio, venenatis et condimentum a, gravida sed neque. Proin et arcu tortor, non volutpat lectus. Aenean at justo sit amet libero suscipit malesuada.');
    $('input[name="tags"]').val('miraflores sc2 2013');      
}

function listarAuspiciadores(){
    // var cities = ['Gamer123', 'Pro wannabe', 'Dota4life', 'Nevermore', 'Sandking', 'Alquemist', 'Fusil', 'Yurnero', 'G_G', 'ghost000', 'gondar000'];
    // $('#auspiciador').autocomplete(cities);
    var auspiciador = $('#auspiciador').val().toLowerCase(),    
    data = {
        'key' : auspiciador
    };

    $.ajax({
       url : "http://localhost/starcrafty/auspiciador/listar",
       type : 'POST',
       data : data,
       success : function(msg){
        autocompletar(msg);
       }
       // success : function(msg){
       //      var msg = msg.split(' ');
       //     console.log(msg);
       // }
       // success : function(msg){   
       //      var a = $.parseJSON(msg);
       //      console.log(a['key']);
       // }
    });
}

function autocompletar(msg, input){
  var matchs = msg.split(' ');
  $('#auspiciador').autocomplete(matchs);
}

function agregarAuspiciador(){  
  var ausp = $('#auspiciador').val(),
  lista = $('textarea[name="auspiciadores"]').val();
  $('textarea[name="auspiciadores"]').val(ausp+' '+lista);
  return false;
}