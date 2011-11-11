<div id="mainContent">
    <h2>Crear Torneo | IN HOME</h2>                            
    <span class="advice">(*) Campos Obligatorios</span>           
    <button id="datosPrueba">datos de prueba</button>                
    <h3>Crea tu torneo <span class="resaltado">IN HOME</span> en 3 Pasos</h3>
    <a href="#" class="pasos"></a>                            
    <code>1 </code><a href="#" class="pasos">Información Principal</a><span class="raquo"> &raquo;</span>                          
    <code>2 </code><a href="#" class="pasos">Invitados</a><span class="raquo"> &raquo;</span>
    <a href="#" class="pasos"></a>                            
    <code>3 </code><a href="#" class="pasos">Confirmar</a>
    
    <div class="separator"></div>                        
    
    <div id="crearTorneo">
                                
                                <?php echo form_open('torneos/nuevo/privado'); ?>
                                    <div class="crearTorneoContent" id="principal">
                                        <h3>Información Principal</h3>
                                            
                                        <p><label for="nombre">Nombre </label><input type="text" name="nombre"><span class="asterisco"> *</span></p>
                                        <p><label for="imagen">Imagen </label><input type="file" name="imagen"><span class="asterisco"> *</span></p>
                                        <p><label for="descripcion">Descripción </label><textarea name="descripcion"></textarea><span class="asterisco"> *</span></p>
                                        <p><label for="organizadores">Organizadores </label><input type="text" name="organizadores"><span class="asterisco"> *</span></p>
                                        <p><label for="auspiciadores">Auspiciadores </label><input type="text" name="auspiciador"> <button id="agregarAuspiciador">Añadir a la lista</button><span class="asterisco"> *</span></p>                                       
                                        <p><textarea name="auspiciadores[]" disabled="disabled"></textarea></p>
                                        <p><label for="fecha">Fecha </label><input type="date" name="auspiciador">
                                        <p><label for="tags">Tags </label><input type="text" name="tags"><span class="asterisco"> *</span><span class="advice"> Separar por comas ','</span></p>                                      
                                    </div>                                   
                                    
                                    <div class="crearTorneoContent" id="detalles">
                                        <h3>Solo pueden haber 4 | 8 | 16 | 32 | 64 | 128 Invitados</h3>
                                        <span class="advice">Si vas a participar agregate a la lista también !</span>
                                        <p><label for="invitados">Invitados </label><input type="text" id="invitados"><button id="agregarInvitado" class="boton">Agregar</button></p>
                                        
                                         <table id="invitadosTable">
                                            <tr>
                                                <th>Username</th>
                                                <th>Opción</th>
                                            </tr>
                                            
                                        </table>
                                        
                                    </div>
                                    
                                    <div class="crearTorneoContent" id="confirmar">
                                        <h3>Confirmar Creación del Torneo</h3>
                                        <p><input type="checkbox" name="copiaCorreo" checked="checked"><label for="copiaCorreo">Enviar una copia a mi correo </label></p>
                                        <p><input type="checkbox" name="terminos"><label for="terminosCondicones"><a href="#">Aceptar Términos y Condiciones</a></label><span class="advice"> *</span></p>
                                        <p><input type="submit" value="Confirmar Torneo !" class="boton"><input type="reset" class="boton"></p>
                                        
                                       
                                        
                                    </div>
                                <?php echo form_close(); ?>
                            </div>                                                       
						</div>