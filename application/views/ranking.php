<div id="mainContent">
                                <h2>Ranking</h2>
                                                            
                                
                            <div class="separator last"></div>
                            <div class="ranking">
                                
                                <?php if(count($miembros)>0) {
                                
                                    
                                        ?>
                                        
                                <table class="tabla">
                                    <thead>
                                        
                                        <?php foreach($miembros as $jugador){
                                        ?>
                                        <tr>
                                            <th>Posici&oacute;n</th>
                                            <th>Nombre</th>
                                            <th>Puntos</th>
                                            <th>Raza</th>
                                            <th>Contacto</th>
                                            <th>Ingres&oacute;</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        <tr>
                                            <td><?php echo $jugador->ranking;?></td>
                                            <td><?php echo $jugador->username;?></td>
                                            
                                            <td><?php echo $jugador->score;?></td>
                                            
                                            <td><?php echo $jugador->razaId;?></td>
                                            <td><?php echo $jugador->email_address;?></td>
                                            <td><?php echo $jugador->fechaRegistro;?></td>
                                            <td><a  href="<?php echo base_url();?>ranking/verMasDelJugador/<?php echo $jugador->id;?>">Ver m&aacute;s del jugador</a></td>									
                                            
                                   
                                        </tr>
                                        <?php }}?>
                                        
                                    </tbody>
                                </table>

                                
                            </div>
							
                                                     
						</div>
                        
            