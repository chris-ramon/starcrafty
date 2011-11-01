<div id="mainContent">
	<h2>Crear Torneo</h2>
	<span class="advice">(*) Campos Obligatorios</span>                           
	<h3>Crea tu torneo en 4 Pasos: <button id="datosPrueba">Datos de Prueba</button></h3>
	<code>1 </code><a href="#" class="pasos">Información Principal</a><span class="raquo"> &raquo;</span>
	<code>2 </code><a href="#" class="pasos">Detalles</a><span class="raquo"> &raquo;</span>
	<code>3 </code><a href="#" class="pasos">Cronograma</a><span class="raquo"> &raquo;</span>
	<code>4 </code><a href="#" class="pasos">Confirmar</a>
	
	<p><?php echo $error; ?></p>
	
	<div class="separator"></div>                        
	
	<div id="crearTorneo">
	    
	    <form method="post" id="crearTorneoForm" enctype="multipart/form-data" action="/starcrafty/torneos/nuevo">
	        <div class="crearTorneoContent" id="principal">
	            <h3>Información Principal</h3>
	                
	            <p><label for="nombre">Nombre </label><input type="text" name="nombre"><span class="asterisco"> *</span></p>
	            <p><label for="imagen">Imagen </label><input type="file" name="imagen"><span class="asterisco"> *</span></p>
	            <p><label for="descripcion">Descripción </label><textarea name="descripcion" id="txta_descp"></textarea><span class="asterisco"> *</span></p>
	            <p><label for="organizadores">Organizadores </label><input type="text" name="organizadores"><span class="asterisco"> *</span></p>
	            <p><label for="auspiciadores">Auspiciadores </label><input type="text" name="auspiciador"><button id="agregarAuspiciador">Añadir a la lista</button><span class="asterisco"> *</span></p>
	            <p><textarea name="auspiciadores[]" disabled="disabled"></textarea></p>
	            <p><label for="tags">Tags </label><input type="text" name="tags"><span class="asterisco"> *</span><span class="advice"> Separar por comas ','</span></p>
	            <p><label for="file">Reglas </label><input type="file" name="reglas"><span class="asterisco"> *</span></p>                                       
	            
	        
	        </div>
	        
	        <div class="crearTorneoContent" id="detalles">
	            <h3>Detalles</h3>
	            
	            <p><label for="modoJuego">Modo de Juego</label>
	                <select name="modoJuego">
	                    <option>1v1</option>
	                    <option>2v2</option>
	                    <option>3v3</option>
	                </select><span class="asterisco"> *</span>
	            </p>
	            <p><label for="sistemaEliminacion">Sistema de Eliminación</label>
	                <select name="sistemaEliminacion"><option>Single Elimination</option></select><span class="asterisco"> *</span>
	            </p>
	            <p><label for="lugarEvento">Lugar del Evento </label><input type="text" name="lugarEvento"><span class="asterisco"> *</span></p>
	            <p><label for="fecha">Fecha </label><input type="date" name="fecha"><span class="asterisco"> *</span></p>
	            <p><label for="hora">Hora </label><input type="number" name="hora"><span class="asterisco"> *</span></p>
	            <p><label for="inversion">Inversion </label> | <input type="checkbox" name="inversion">Gratis ! <input type="number" name="inversion"><span class="asterisco"> *</span></p>
	            <p><label for="numeroJugadores">Número de Jugadores </label><input type="number" name="numeroJugadores"><span class="asterisco"> *</span><span class="advice"> El número de jugadores debe ser: 4 | 8 | 16 | 32 | 64 | 128 ...</span></p>
	            <p>Premios</p>
	            <p class="pTab"><label for="primerLugar">1 Primer Lugar </label><input type="text" name="primerLugar"><span class="asterisco"> *</span></p>
	            <p class="pTab"><label for="segundoLugar">2 Segundo Lugar </label><input type="text" name="segundoLugar"><span class="asterisco"> *</span></p>
	            <p class="pTab"><label for="tercerLugar">3 Tercer Lugar </label><input type="text" name="tercerLugar"><span class="asterisco"> *</span></p>
	            <p><label for="mapas">Mapas </label><input type="text" name="mapa"><button id="agregarMapa">Añadir a la lista</button><span class="asterisco"> *</span></p>
	            <p><textarea name="mapas[]" disabled="disabled"></textarea></p>
	            <p><label for="referees">Referees </label><textarea name="referees"></textarea></p>
	            
	            
	        </div>
	        
	        <div class="crearTorneoContent" id="cronograma">
	            <h3>Cronograma</h3>
	            <p><label for="inicioInscripcion">Fecha de Inicio de Inscripciones </label><input type="date" name="inicioInscripcion"><span class="advice"> *</span></p>                                  
	            <p><label for="fechaMaximaInscripcion">Fecha Máxima de Inscripciones </label><input type="date" name="fechaMaximaInscripcion"><span class="advice"> *</span></p>                                       
	        </div>                            
	        
	        <div class="crearTorneoContent" id="confirmar">
	            <h3>Confirmar Creación del Torneo</h3>
	            <p><input type="checkbox" name="copiaCorreo" checked="checked"><label for="copiaCorreo">Enviar una copia a mi correo </label></p>
	            <p><input type="checkbox" name="terminos"><label for="terminosCondicones"><a href="#">Aceptar Términos y Condiciones</a></label><span class="advice"> *</span></p>
	            <p><input type="submit" value="Confirmar Torneo !"><input type="reset"></p>
	        </div>
	        
	    </form>
	</div>                                                       
</div>
                
