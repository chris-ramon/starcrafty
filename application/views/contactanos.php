
						<div id="mainContent">
                                <!-- En el siguiente h2 colocan el título de su página -->
                                <!-- Osea acá--><h2>Contáctanos</h2>
                                <div id="busquedaTorneo">
                                </div>                              
                                
                            <div class="separator last"></div>
                            <h2>Starcrafty</h2>
                            <h3>Nuestra Dirección</h3>
                            <p>Av. Los Rosales 178 Chorrillos</p>
                            
                            <h3>Horarios de Oficina</h3>
                            <p>Lunes a Viernes de 10:00 a 19:00 horas</p>
                            <p>Sábados 10:00 a 14:00 horas</p>
                            
                            <h3>Teléfono / Fax 3453453453</h3>
                            <p>Celular : 9998239</p>
                            
                            <h3><a href="mailto:starcrafty@gmail.com">email</a></h3>
                            
                            
                            <fieldset>
                            <h3>Enviános un mensaje</h3>
                            
                            <?php echo form_open('/contactanos/enviarmensaje') ?>
                            <p><label for="name">Nombre <input type="text" name="nombre"></label> <span class="asterisco"> *</span></p>
                            <p><label for="email">Email <input type="text" name="email"></label> <span class="asterisco"> *</span></p>
                            <p><textarea name="mensaje"></textarea> <span class="asterisco"> *</span></p>
                            <p><input type="submit" class="boton"><input type="reset" class="boton"></p>
                            </fieldset>
                            <?php echo form_close() ?>							
                                                       
						</div>
                        
                        <div class="separator"></div>
                        <div class="separator last"></div>
                        
                        
                        <div id="footer">
                            <p>Nosotros <a href="#">¿Quién es Starcrafty?</a> | <a href="#">Contáctenos</a> | <a href="#">Administrador</a></p>
                            <p>Torneos <a href="#">Mis Torneos</a> | <a href="#">Mis Reservas</a> | <a href="#">En Competencia</a> | <a href="#">Concluídos</a> | <a href="#">Suspendidos</a></p>
                            <p>Cuenta <a href="#">Crear Cuenta</a> | <a href="#">Resumen de Cuenta</a></p>
                            <p>FAQ <a href="#">Ayuda</a></p>
                        </div>
                    </div>                    
                </div>	
			</div>		
	</body>
		
		
</html>
