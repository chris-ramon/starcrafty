<div id="mainContent">
    <h2>Torneos</h2>
    <?php if(isset($torneos)) { ?>
    <?php if(!$torneos || $aprobados == 0) { ?>
    <div class="separator last"></div>
    <p class="advice centrar">No existen torneos creados por el momento, puedes
    registrarte y crear uno!</p>
    <div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
    </div>
    <?php } else{ ?>
    <div id="busquedaTorneo">
        <?php echo form_open('/busqueda'); ?>
        <p><input type="search" name="busqueda" class="busqueda"><input type="submit" value="Buscar" class="boton"></p>
        <?php echo form_close(); ?>
    </div>
    
    <div class="separator last"></div>
    <div id="tournament">

    <?php foreach($torneos as $torneo) { ?>
        <?php if($torneo->aprobado == "si") {?>
        <?php if($torneo->estado == "Reserva Abierta") { ?>
        <div class="detalleReserva <?php echo $torneo->id ?>">            
            <a href="#" class="cerrar">Cerrar</a>

            <div id="reservapago">
            <p><strong>Torneo: </strong></p>            
            <p><em><?php echo $torneo->nombre ?></em></p>
            <p><strong>Fecha:</strong></p>
            <p><em><?php echo $torneo->fecha_torneo ?></em></p>
            </div>

            <div id="detalleReservaContent">                      
            <p>Código de Pago</p>
            <?php echo form_open('reserva/nueva/'.$torneo->id); ?>
            <p><input type="text" name="codigoPago" class="degradado" id="codigoPago" maxlength="18"></p>
            <p><input type="submit" value="Confirmar Reserva" class="boton botonpago"><input type="reset" class="boton"></p>
            </div>                
            <?php echo form_close(); ?>

            
        </div>
        <?php } ?>     
        <div class="tournamentImg">
        	<!-- Image of the tournament -->
        	<img src="<?php echo $torneo->imagen ?>">								
        </div>
        
        <div class="tournamentOptions">

            <?php $estado = $torneo->estado ?>
            <?php if($estado == "Reserva Abierta") { ?>
        	<!-- Status of the tournament -->
        	<p id="<?php echo $torneo->id ?>">
            <?php if($torneo->total_reservas < $torneo->num_jugadores) {?>
            <a href="#" class="opcion reservarCupo">Reservar Cupo</a> &raquo;
            <?php echo $torneo->total_reservas ?> / <?php echo $torneo->num_jugadores  ?>
            </p>            

            <p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><code><?php echo $torneo->estado ?></code></p>

            <?php } else { ?>
            <code>Reservas Agotadas</code>
            <?php } ?>
            <?php } ?>

            <?php if($estado == 'En Competencia') { ?>
            <p><a href="#" class="opcion">Ver Resultados</a></p>
            <p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><code><?php echo $torneo->estado ?></code></p>
            <?php } ?>

            <?php if($estado == 'Suspendido') { ?>
            <p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><code><?php echo $torneo->estado ?></code></p>
            <?php } ?>

            <?php if($estado == 'Concluido') { ?>
            <p><a href="#" class="opcion">Ver Resultados</a></p>
            <p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><code><?php echo $torneo->estado ?></code></p>
            <?php } ?>
        	<!-- Share the tournament -->							
            <div class="shareTournament">
                
                <!-- Facebook share-->
                <script>var fbShare = {
                            url: 'http://www..com/',
                            size: 'big',
                            google_analytics: 'true'
                }</script>
                <script src="http://widgets.fbshare.me/files/fbshare.js"></script>                                    
                <!-- End facebook share -->
                
                    <!-- Twitter share -->
                    <script type="text/javascript">
                    tweetmeme_url = 'http://www..com/';
                    </script>
                    <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>                                    
                    <!-- End twitter share-->
                    
            </div>
        </div>
                                
			<div class="tournamentContent">
                <!-- Title of the tournament --><!-- Comments of the tournament -->
                <h3><a href="/starcrafty/torneos/detalle/<?php echo $torneo->id ?>"><?php echo $torneo->nombre; ?></a> | <a href="/starcrafty/torneos/detalle/<?php echo $torneo->id ?>/#comentarios">Comentarios(<?php echo $torneo->                      cantidad_comentarios ?>)</a></h3>																	
                <!-- Tags of the tournament -->
                <p>Tags: <?php foreach($torneo->tags as $tag) { ?>
                <a href="#"><?php echo $tag->tag ?></a>
                <?php } ?>
                </p>
                <!-- Description of the tournament -->
                <p><?php echo $torneo->descripcion ?><a href="#"> más ...</a></p>									
			</div>
            <div class="separator"></div>   
            <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } else { ?>                                                                
        <div class="separator last"></div>
    <p class="advice centrar">No existen torneos creados por el momento, puedes
    registrarte y crear uno!</p>
    <div class="img_excep">
        <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
    </div>

    <?php } ?>
                            
    </div>
                            
    <!-- Div for see more tournamnet's -->
<!--<?php if(isset($torneos)) { ?>
    <?php if($torneos && $aprobados != 0) { ?>
        <div class="seeMore">
            <a href="#">Ver más</a>
        </div>                            
    <?php } ?>
    <?php } ?> -->

