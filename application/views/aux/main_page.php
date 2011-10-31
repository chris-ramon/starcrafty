<!DOCTYPE html>
<html lang="es">
	<head>
		<meta content="text/html" charset="utf-8">
		<meta name="description" content="Gestionar reservas de torneos de starcraft 2">
		<meta name="keywords" content="torneos sc2 perú, sc2 perú torneos, torneos sc2 latinoamerica">
		<meta name="author" content="Christian Ramón, Omar Barboza">
		<meta name="robots" content="all ,follow, index">
		<meta name="generator" content="geany">

		<title>Starcrafty | SC2 Peruvian Tournaments</title>
		
		<link rel="stylesheet" href="<?php echo base_url();?>application/site_media/css/css.css" type="text/css" media="screen" />	
	
        <script src="<?php echo base_url();?>application/site_media/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>application/site_media/js/mainScript.js" type="text/javascript"></script>
        
        
	<head/>

	<body>
    
        
		<div id="container">
			<div id="header">
                <div id="registro">
                <span id="cerrarRegistro">X</span>
                <p><label for="username" class="reddy">Username <input type="text"></label>
                <label for="pwd" class="reddy">Password <input type="password"></label>
                <label for="idbattlenet" class="reddy">ID BattleNet <input type="text"></label></p>
                <p><input type="submit" value="Registrarme"><input type="reset"></p>
                </div>
				<div id="headerTop">
                    <input type="text" name="username" placeholder="Nombre Usuario">
                    <input type="password" name="pwd" placeholder="Tu pass ...">
                    <input type="submit" value="ingresar">			
				</div>
				<div id="headerLeft">
					<a href="#"></a> |
					<a href="#" id="registrate">Regístrate</a>
				</div>
			</div>
			
				<div id="main">
					<div id="barLeft">
					<strong>Mis Torneos</strong><br>
                    <h3><a href="crearTorneo.html">Crear Torneo</a></h3><br>
                    <strong>Mi Cuenta</strong>
					</div>
					<div id="content">
						<h1>Starcrafty | </h1>
						<h1>Peruvian SC2 Tournaments</h1>
						<div id="contentNews">
                            <img src="<?php echo base_url();?>application/site_media/img/sc2_1.png">
                        </div>
						<div id="menu">
							<a href="mainPage.html" class="button buttonRed">Torneos</a>
								<div id="torneoMenu">
									<ul>
									<li><a href="enCompetencia.html" class="button buttonRed lefty">En Competencia</a></li>
									<li><a href="concluidos.html" class="button buttonRed lefty">Concluídos</a></li>
									<li><a href="suspendidos.html" class="button buttonRed lefty">Suspendidos</a></li>																	
									</ul>
									
								</div>

							<a href="reservaAbierta.html" class="button buttonRed">Hacer Reservas</a>
							<a href="fixtureTorneo.html" class="button buttonRed">Resultados</a>
							<a href="rankingTorneo.html" class="button buttonRed">Ranking</a>
							<a href="preguntasFrecuentes.html" class="button buttonRed">Preguntas Frecuentes</a>
							<a href="contactanos.html" class="button buttonRed">Contáctanos</a>
						</div>
						<div id="mainContent">
                                <!-- En el siguiente h2 colocan el título de su página -->
                                <!-- Osea acá--><h2>Torneos</h2>
                                <div id="busquedaTorneo">
                                    <p><input type="search" name="busqueda" class="busqueda"><input type="submit" value="Buscar" class="boton"></p>
                                </div>
                            
                            <div class="separator last"></div>
							<div id="tournament">
                                <!-- Torneo en concluído -->
                                <div class="tournamentImg">
									<!-- Image of the tournament -->
									<img src="<?php echo base_url();?>application/site_media/img/samplesc2_4.jpg">									
								</div>
								
                                <div class="tournamentOptions">
                                
									<!-- Status of the tournament -->
									<p><a href="#" class="opcion">Ver Resultados</a></p>
									<p><span class="statusTournament yellow"></span><code>Concluído</code></p>
                                    
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
									<h3><a href="descripcionTorneo.html">Torneo Drago La Molina 2012 !</a> | <a href="#">Comentarios(10)</a></h3>																	
                                    <!-- Tags of the tournament -->
                                    <p>Etiquetas: <a href="">Torneo Starcraft II 2011</a> , <a href="#">Miraflores Starcraft II</a></p>
									<!-- Description of the tournament -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum aliquet pretium. 
									Praesent aliquet feugiat velit eget luctus. Morbi nec mauris mauris. 
									Ut eu sapien diam. Donec quam nibh, tincidunt sit amet vulputate ut, 
									hendrerit non lacus. In luctus nulla nec libero molestie eleifend. 
									Fusce pellentesque libero eget massa tempus id euismod est fringilla. 
									In faucibus cursus nibh et luctus. Phasellus vel enim eget lectus 
									fermentum ornare. <a href="#"> más ...</a></p>									
								</div>
                                <div class="separator"></div>
                            
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
									<img src="<?php echo base_url();?>application/site_media/img/samplesc2.jpg">									
								</div>
								
                                <div class="tournamentOptions">
                                
									<!-- Status of the tournament -->
									<p><a href="#" class="opcion reservarCupo">Reservar Cupo</a></p>
									<p><span class="statusTournament green"></span><code>Reserva Abierta</code></p>
                                    
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
									<h3>Torneo Open Summer Miraflores 2012 ! | <a href="#">Comentarios(10)</a></h3>																	
                                    <!-- Tags of the tournament -->
                                    <p>Etiquetas: <a href="#">Torneo Starcraft II 2011</a> , <a href="#">Miraflores Starcraft II</a></p>
									<!-- Description of the tournament -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum aliquet pretium. 
									Praesent aliquet feugiat velit eget luctus. Morbi nec mauris mauris. 
									Ut eu sapien diam. Donec quam nibh, tincidunt sit amet vulputate ut, 
									hendrerit non lacus. In luctus nulla nec libero molestie eleifend. 
									Fusce pellentesque libero eget massa tempus id euismod est fringilla. 
									In faucibus cursus nibh et luctus. Phasellus vel enim eget lectus 
									fermentum ornare. <a href="#"> más ...</a></p>									
								</div>
                                <div class="separator"></div>
                                
                                <!-- Torneo en competencia -->
								<div class="tournamentImg">
									<!-- Image of the tournament -->
									<img src="<?php echo base_url();?>application/site_media/img/samplesc2_2.jpg">									
								</div>
								
                                <div class="tournamentOptions">
                                
									<!-- Status of the tournament -->
									<p><a href="#" class="opcion">Ver Resultados</a></p>
									<p><span class="statusTournament blue"></span><code>En Competencia</code></p>
                                    
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
									<h3>Torneo Drago Summer ! | <a href="#">Comentarios(22)</a></h3>																	
                                    <!-- Tags of the tournament -->
                                    <p>Etiquetas: <a href="#">Torneo Starcraft II 2011</a> , <a href="#">Miraflores Starcraft II</a></p>
									<!-- Description of the tournament -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum aliquet pretium. 
									Praesent aliquet feugiat velit eget luctus. Morbi nec mauris mauris. 
									Ut eu sapien diam. Donec quam nibh, tincidunt sit amet vulputate ut, 
									hendrerit non lacus. In luctus nulla nec libero molestie eleifend. 
									Fusce pellentesque libero eget massa tempus id euismod est fringilla. 
									In faucibus cursus nibh et luctus. Phasellus vel enim eget lectus 
									fermentum ornare. <a href="#"> más ...</a></p>									
								</div>
                                <div class="separator"></div>
                                
                                <!-- Torneo en suspendido -->
                                <div class="tournamentImg">
									<!-- Image of the tournament -->
									<img src="<?php echo base_url();?>application/site_media/img/samplesc2_3.jpg">									
								</div>
								
                                <div class="tournamentOptions">
                                
									<!-- Status of the tournament -->
									<p><a href="#" class="opcion"></a></p>
									<p><span class="statusTournament red"></span><code>Suspendido</code></p>
                                    
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
									<h3>Torneo Arenales 2012 ! | <a href="#">Comentarios(0)</a></h3>																	
                                    <!-- Tags of the tournament -->
                                    <p>Etiquetas: <a href="#">Arenales Torneo Starcraft II 2011</a> , <a href="#">Miraflores Starcraft II</a></p>
									<!-- Description of the tournament -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum aliquet pretium. 
									Praesent aliquet feugiat velit eget luctus. Morbi nec mauris mauris. 
									Ut eu sapien diam. Donec quam nibh, tincidunt sit amet vulputate ut, 
									hendrerit non lacus. In luctus nulla nec libero molestie eleifend. 
									Fusce pellentesque libero eget massa tempus id euismod est fringilla. 
									In faucibus cursus nibh et luctus. Phasellus vel enim eget lectus 
									fermentum ornare. <a href="#"> más ...</a></p>									
								</div>
                                <div class="separator"></div>                                                            

                            
                            </div>
                            
                            <!-- Div for see more tournamnet's -->
                            <div class="seeMore">
                                <a href="#">Ver más</a>
                            </div>                            
						</div>
                        
                        <div class="separator last"></div>
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
            <div id="backgroundPopUp"></div>	
	</body>
		
		
</html>
