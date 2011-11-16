<?php $hoy = date('Y-m-d h:i:s') ?>
<div id="mainContent">
    <h2>Reservas realizadas hasta <?php echo $hoy ?></h2>
    <div class="separator last"></div>
    <?php if(!$reservas){ ?>
    	<p class="advice centrar">No hay reservas aún, gracias !</p>
     <div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
     </div>
    <?php } else { ?>

    	<table class="tabla">
    		<caption><?php echo $reservas[0]->nombre_torneo ?></caption>
    		<tr>
    			<th>Reserva Nº</th>
    			<th>Username</th>
    			<th>Código Pago</th>
    			<th>Fecha</th>
    		</tr>
    		<?php $i=1; ?>
    		<?php foreach ($reservas as $reserva): ?>
    		<tr>
    			<td><?php echo $i; ?></td>	
    			<td><?php echo $reserva->username ?></td>
    			<td><?php echo $reserva->codigo_pago ?></td>
    			<td><?php echo $reserva->fecha ?></td>
    		</tr>	
    		<?php $i++; ?>
    		<?php endforeach ?>
    	</table>	
    <?php } ?>    
</div>