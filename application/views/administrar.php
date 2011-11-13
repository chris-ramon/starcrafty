<div id="mainContent">
	<h2>Administrar Torneos</h2>
	<div class="separator last"></div>
	<?php if ($torneos){ ?>
	
	<table class="tabla">
		<tr>
			<th>Nombre Torneo</th>
			<th>Creador</th>
			<th>Estado</th>
			<th>Tipo</th>
			<th>Aprobado ?</th>
			<th>Fecha</th>
			<th>Opción</th>
		</tr>

		<?php foreach ($torneos as $torneo): ?>
		<tr>
			<td><?php echo $torneo->nombre ?></td>
			<td><?php echo $torneo->creador ?></td>
			<td><?php echo $torneo->estado ?></td>
			<td><?php echo $torneo->tipo ?></td>
			<td><?php echo $torneo->aprobado ?></td>
			<td><?php echo $torneo->fecha_torneo ?></td>
			<td>
				<a href="<?php echo base_url() ?>torneos/eliminar/<?php echo $torneo->id ?>">Eliminar</a>
			</td>
		</tr>	
		<?php endforeach ?>


	</table>
	<?php } else { ?>
	<p class="advice centrar">No existen torneos creados por el momento !</p>
    <div class="img_excep">
    	<img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
    </div>
	<?php } ?>	


</div>