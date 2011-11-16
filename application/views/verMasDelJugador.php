<div id="mainContent">
                                <!-- En el siguiente h2 colocan el tÃ­tulo de su pÃ¡gina -->
                                <!-- Osea acÃ¡--><h2>Ver m&aacute;s del jugador</h2>
                                
                            <div class="separator last"></div>
                            
			<div class="detalle">		
                            <div class="detalleJugador">
                                <h1><?php echo $jugador->username;?></h1>
                                
                                
                                <table border="1">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Posici&oacute;n</td>
                                            <td><?php echo $jugador->id;?></td>
                                        </tr>
                                        <tr>
                                            <td>Puntos</td>
                                            <td><?php echo $jugador->score;?></td>
                                        </tr>
                                        <tr>
                                            <td>Nombres</td>
                                            <td><?php echo $jugador->nombre;?></td>
                                        </tr>
                                        <tr>
                                            <td>Apellidos</td>
                                            <td><?php echo $jugador->apellido;?></td>                                       
                                        </tr>
                                        <tr>
                                            <td>Edad</td>
                                            <td><?php echo $edad;?></td>
                                        </tr>
                                        <tr>
                                            <td>Raza</td>
                                            <td>Terran <img src="http://localhost/starcrafty/application/site_media/img/raza.png" alt="raza"></img></td>
                                        </tr>
                                        <tr>
                                            <td>Correo</td>
                                            <td><?php echo $jugador->email_address;?></td>
                                        </tr>
                                    </tbody>
                                </table>

                                
                                </div>
                            <div class="imagenJugador">
                                <img src="<?php echo base_url() ?>application/site_media/img/jugador.jpg">                                
                            </div></div>
                            
                            <!-- Div for see more tournamnet's -->
                            <div class="seeMore">
                                <a  href="<?php echo base_url();?>ranking/">Volver al ranking</a>
                            </div>                            
						</div>
              

