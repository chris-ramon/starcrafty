<div id="mainContent">
                                <!-- En el siguiente h2 colocan el título de su página -->
                                <!-- Osea acá--><h2>Torneos</h2>
                                <div id="busquedaTorneo">
                                    <p><input type="search" name="busqueda" class="busqueda"><input type="submit" value="Buscar" class="boton"></p>
                                </div>
                            
                            <div class="separator last"></div>
							<div id="tournament">
                                <?php if(!$torneos) { ?>
                                    <pre>

No existen torneos registrados por el momento ... 
registrate y crea uno !

                                    </pre>
                                <?php } else{ ?>
                                    <?php foreach($torneos as $torneo) { ?>
                                <!-- Torneo con reserva abierta -->
                                <div class="detalleReserva">
                                                                    
                                    <div id="detalleReservaContent">
                                    <br>
                                    <a href="#" class="cerrar">Cerrar esta ventana!</a><br>
                                    
                                    <p>Código de Pago</p>
                                    <p><input type="text" name="codigoPago"></p>
                                        <select>
                                            <option>Torneo Miraflores</option>
                                            <option>Torneo Drago</option>
                                        </select>
                                    <p><input type="submit" value="Realizar Reserva" class="boton"><input type="reset" class="boton"></p>
                                    </div>
                                        
                                </div>
								<div class="tournamentImg">
									<!-- Image of the tournament -->
									<img src="<?php echo $torneo->imagen ?>">									
								</div>
								
                                <div class="tournamentOptions">
                                
									<!-- Status of the tournament -->
									<p><a href="#" class="opcion reservarCupo">Reservar Cupo</a></p>
									<p><span class="statusTournament green"></span><code><?php echo $torneo->estado ?></code></p>
                                    
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
									<h3><a href="/starcrafty/torneos/detalle/<?php echo $torneo->id ?>"><?php echo $torneo->nombre; ?></a> | <a href="#">Comentarios(10)</a></h3>																	
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
                            
                            </div>
                            
                            <!-- Div for see more tournamnet's -->
                            <?php if($torneos) { ?>
                            <div class="seeMore">
                                <a href="#">Ver más</a>
                            </div>                            
                            <?php } ?>
						</div>                   

