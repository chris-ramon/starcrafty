<div id="mainContent">
    <h2>Empieza a hacer tus Reservas !</h2>
    <?php if($torneos) {?>
    <div class="separator last"></div>
    <div id="tournament">                  
        <?php foreach($torneos as $torneo) {?>
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
            <?php echo form_open(); ?>
            <p><input type="text" name="codigoPago" class="degradado" id="codigoPago" maxlength="18"></p>
            <p><input type="submit" value="Confirmar Reserva" class="boton botonpago"><input type="reset" class="boton"></p>
            

            </div>                
            <?php echo form_close(); ?>
        </div>

        <!-- Image of the tournament -->
        <div class="tournamentImg">
            <img src="<?php echo $torneo->imagen ?>">
        </div>
        
        <div class="tournamentOptions">
            <!-- Status of the tournament -->
            <p id="<?php echo $torneo->id ?>">
            <a href="#" class="opcion reservarCupo">Reservar Cupo</a>
            </p>       
        
            <p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><code><?php echo $torneo->estado ?></code></p>
            
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
            <!-- End share the tournament -->

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
    </div>


    <div class="separator"></div>
    <?php } ?>
    <?php } else { ?>
        <div class="separator last"></div>
        <p class="centrar advice">No tenemos torneos <em>con reserva abierta </em> !</p>
        <div class="img_excep">
            <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
        </div>
    <?php } ?>




                            
                               
