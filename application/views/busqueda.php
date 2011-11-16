<div id="mainContent">
    <h2>Resultados</h2>
    <div class="separator last"></div>
    <?php if(!$resultados) {?>
    	     <p class="advice centrar">No se encontró ningún torneo !</p>
     <div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
     </div>
    <?php } else { ?>
    	<p>Torneos :</p>
    	<?php foreach($torneos as $torneo) { ?>
    	<p><a href="<?php echo base_url() ?>torneos/detalle/<?php echo $torneo->id ?>"><h3><?php echo $torneo->nombre ?></h3></a></p>

    	<p><a href="<?php echo base_url() ?>torneos/detalle/<?php echo $torneo->id ?>"><img src="<?php echo $torneo->imagen ?>"></a></p>

    	

    	<?php } ?>
    <?php } ?>
</div>