<div id="mainContent">
    
    
     <form method="post" id="crearRondasForm" enctype="multipart/form-data" action="/starcrafty/rondas/crearRondas">
        
         <input type="hidden" name="torneoId" value="<?php echo $torneoId;?>" />
         
         
        <table border="1">
    <thead>
    <tr>
        <th>N&uacute;mero de Ronda</th>
    <th>Lugar</th>
    <th>Fecha</th>
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

