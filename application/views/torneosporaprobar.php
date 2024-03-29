<div id="mainContent">
    <h2>Torneos Por Aprobar</h2>    
    <div class="separator last"></div>
    <?php if($torneos_por_aprobar) { ?>
    <table class="tabla">
         <tr>
             <th>Nombre Torneo</th>
             <th>Tipo</th>
             <th>Creador</th>
             <th>Organizador</th>
             <th>Fecha Torneo</th>
             <th>Opción</th>
         </tr>
         <?php foreach($torneos_por_aprobar as $torneo) {?>
         <tr>
             <td><?php echo $torneo->nombre ?></td>
             <td><?php echo $torneo->tipo ?></td>
             <td><?php echo $torneo->creador ?></td>
             <td><?php echo $torneo->organizador ?></td>
             <td><?php echo $torneo->fecha_torneo ?></td>
             <td>
                <a href="/starcrafty/torneos/confirmartorneos/<?php echo $torneo->id ?>/si">Aceptar Torneo</a><br/>
                <a href="/starcrafty/torneos/confirmartorneos/<?php echo $torneo->id ?>/rechazado">Rechazar Torneo</a>
            </td>
         </tr>
         <?php } ?>
     </table>
     <?php } else { ?>     
     <p class="advice centrar">No existen torneos por aprobar !</p>
     <div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
     </div>
     <?php } ?>
</div>