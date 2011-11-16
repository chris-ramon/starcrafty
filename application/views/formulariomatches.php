<div id="mainContent">
    
    
     <form method="post" id="updateMatches" enctype="multipart/form-data" action="/starcrafty/rondas/crearRondas">
        
         <input type="hidden" name="torneoId" value="<?php echo $torneoId;?>" />
         <input type="hidden" name="torneoId" value="<?php echo $rondaId;?>" />
         
         
        <table border="1">
    <thead>
    <tr>
        <th>N&uacute;mero de Juego</th>
    <th>Jugador 1</th>
    <th>Jugador 2</th>
    <th>Ganador</th>
    </tr>
    </thead>
    <tbody>
    
    
    <?php for($i=1;$i<=$numeroRondas;$i++){ ?>
            <tr>
    <td><?php echo $i;?></td>
    <td><input type="text" name="lugar<?php echo $i;?>" value="" /></td>
    <td><input type="text" name="fecha<?php echo $i;?>" value="" /></td>
    </tr>
            
      <?php  } ?>
    </tbody>
    </table>
        <input type="submit" value="Crear rondas" />
    </form>
    
    
    
    
</div>

