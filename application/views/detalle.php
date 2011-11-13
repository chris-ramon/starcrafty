<?php if($torneo->aprobado == 'si') { ?>
<div id="mainContent">
	<section id="descptorneo">
	<h2><?php echo $torneo->nombre ?></h2>
	<img src="<?php echo $torneo->imagen ?>" />
	<p><strong>Estado</strong></p>
	<p><?php echo $torneo->estado ?></p>
	
	<div class="separator last"></div>
	
	<h3>Información Principal</h3>
	<strong>Descripción</strong>
	<p><?php echo $torneo->descripcion ?></p>

	<h3>Detalles</h3>

	<h3>Cronograma</h3>

	</section>
	<div class="separator last"></div>

	<section id="detalle">
		<article class="degradado">
			<p><a href="#"><?php echo $torneo->user ?></a> para <a href="">Starcrafty.com</a></p>
			<p><a href="#comentarios">Agregar Comentario</a></p>
		</article>

		<p><strong>Comentarios</strong></p>
		<?php if($torneo->comentarios) { ?>
		<?php foreach($torneo->comentarios as $comentario) { ?>
		<article class="degradado" id="comments">
			<p><strong><?php echo $comentario->nombre ?></strong></p>
			<p><?php echo $comentario->comentario ?></p>
			<p><?php echo substr($comentario->fecha, 0, 10) ?> - <?php echo substr($comentario->fecha,11) ?></p>
		</article>
		<?php } ?>
		<?php } ?>

		<?php 
			$atributos = array('class' => 'detalleform', 'id' => 'comentarios');
		 ?>
		<?php $id = $torneo->id ?>
		<?php echo form_open('/torneos/nuevo_comentario/'.$id , $atributos); ?>	
		
		<p>
		<input type="text" name="nombre" value = "<?php echo set_value('nombre'); ?>" class = "degradado">
		<label for="nombre">Nombre </label><span class="asterisco"> *</span>
		<?php echo form_error('nombre'); ?>
		</p>

		<p>
		<input type="text" name="correo" value = "<?php echo set_value('correo'); ?>" class = "degradado">
		<label for="correo">Correo </label><span class="asterisco"> *</span>
		<?php echo form_error('correo'); ?>
		</p>

		<label for="comentario">Comentario </label>
		<p>		
		<textarea name="comentario" class = "degradado"></textarea>		
		<?php echo form_error('comentario'); ?>
		</p>

		<p>
		<input id="enviarComentario" type="submit" value="Enviar" class="boton">
		<input type="reset" class="boton">
		</p>
		<?php echo form_close(); ?>

	</section>
</div>
<?php } elseif($torneo->aprobado == "rechazado") { ?>
<h2>&raquo;</h2>
<div class="separator last"></div>
<p class="centrar advice">Este torneo <em>no fue aprobado</em>, gracias.</p>
<div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
</div>
<?php } else{ ?>
<h2>&raquo;</h2>
<div class="separator last"></div>
<p class="centrar advice">Este torneo no fue aprobado <em>aún</em>, gracias.</p>
<div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
</div>
<?php } ?>
