<div id="mainContent">
	<h2><?php echo $torneo->nombre ?></h2>
	
	<div class="tournamentImg">
	<img src="<?php echo $torneo->imagen ?>">
	</div>
	
	<div class="tournamentOptions">
		<?php echo form_open(current_url()); ?>
		<p>Estado Actual: </p>
		<p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><em><?php echo $torneo->estado ?></em></p>
		<select name="estado">
			<option>En Competencia</option>
			<option>Concluido</option>
			<option>Suspendido</option>
		</select>
		<p><input type="submit" class="boton" value="Actualizar Estado !"/></p>
		<?php echo form_close(); ?>
	</div>

	<div class="tournamentContent">
	</div>

	<div class="lastseparator"></div>
	
</div>