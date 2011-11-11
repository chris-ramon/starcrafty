$(document).ready(function(){
    var cities = ['Gamer123', 'Pro wannabe', 'Dota4life', 'Nevermore', 'Sandking', 'Alquemist', 'Fusil', 'Yurnero', 'G_G', 'ghost000', 'gondar000'];
    $('#invitados').autocomplete(cities,{
    autoFill: true,
    selectFirst: true,
    width: '240px'
    });
    
    $('#agregarInvitado').click(function(){
    var invitado = $('#invitados').val();
    
            
    $('#invitadosTable').fadeIn().append('<tr><td><a href="">'+invitado+'</a></td>'+
                                    '<td><button class="boton" id="qInv">Quitar</button></td>'+'/tr>');
                                    
        $('#qInv').click(function(){
            $(this).closest('tr').hide();
            return false;
        });
        
    return false;
    
    });
    
       
})
